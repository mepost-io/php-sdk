<?php

namespace Mepost\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Mepost\Config\MepostConfig;
use Mepost\Models\Requests\AddDomainRequest;
use Mepost\Models\Requests\CancelScheduledMessageRequest;
use Mepost\Models\Requests\CancelWarmUpRequest;
use Mepost\Models\Requests\CreateIpGroupRequest;
use Mepost\Models\Requests\CreateNewGroupRequest;
use Mepost\Models\Requests\CreateSubscriberRequest;
use Mepost\Models\Requests\DeleteSubscriberRequest;
use Mepost\Models\Requests\RenameGroupRequest;
use Mepost\Models\Requests\SendMarketingRequest;
use Mepost\Models\Requests\SendMessageByTemplateRequest;
use Mepost\Models\Requests\SendTransactionalRequest;
use Mepost\Models\Requests\SetIpGroupRequest;
use Mepost\Models\Requests\StartWarmUpRequest;

use Mepost\Models\Responses\AddDomainResponse;
use Mepost\Models\Responses\CancelWarmUpResponse;
use Mepost\Models\Responses\CompanyDomain;
use Mepost\Models\Responses\EmailGroup;
use Mepost\Models\Responses\EmailGroupWithCounts;
use Mepost\Models\Responses\GetMessageInfoResponse;
use Mepost\Models\Responses\GetScheduleInfoResponse;
use Mepost\Models\Responses\IpAddress;
use Mepost\Models\Responses\IPGroup;
use Mepost\Models\Responses\RemoveDomainResponse;
use Mepost\Models\Responses\Schedule;
use Mepost\Models\Responses\SetIpGroupResponse;
use Mepost\Models\Responses\StartWarmUpResponse;
use Mepost\Models\Responses\Subscriber;
use Mepost\Models\Responses\Template;
use Mepost\Models\Responses\Company;
use Mepost\Models\Responses\CompanyPlan;
use Mepost\Models\Responses\PricingPlan;

class MepostClient
{
    private $client;
    private $config;

    /**
     * Constructor to initialize the MepostClient with the given API key.
     *
     * @param MepostConfig $config The Mepost configuration instance.
     */
    public function __construct(MepostConfig $config)
    {
        $this->config = $config;
        $this->client = new Client([
            'base_uri' => 'https://api.mepost.io/v1',
            'headers' => [
                'Authorization' => $this->config->getApiKey(),
                'Content-Type' => 'application/json'
            ]
        ]);
    }

    /**
     * Sends an HTTP request to the Mepost API.
     *
     * @param string $method HTTP method (GET, POST, PUT, DELETE).
     * @param string $endpoint The API endpoint.
     * @param array|null $body The request body.
     * @return array The API response.
     * @throws \Exception If the request fails.
     */
    private function sendRequest(string $method, string $endpoint, ?array $body = null): array
    {
        try {
            $options = [];
            if ($body) {
                $options['json'] = $body;
            }

            $response = $this->client->request($method, $endpoint, $options);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception('API Request failed: ' . $e->getMessage());
        }
    }

    // Company Endpoints
    public function addDomain(AddDomainRequest $request): AddDomainResponse
    {
        $response = $this->sendRequest('POST', '/company/domain/add', $request->toArray());
        return new AddDomainResponse($response);
    }

    public function getDomainList(): array
    {
        $response = $this->sendRequest('GET', '/company/domain/list');
        return array_map(fn($data) => new CompanyDomain($data), $response);
    }

    public function removeDomain(RemoveDomainRequest $request): RemoveDomainResponse
    {
        $response = $this->sendRequest('DELETE', '/company/domain/remove', $request->toArray());
        return new RemoveDomainResponse($response);
    }

    // Groups Endpoints
    public function listGroups(int $limit = 10, int $page = 1): BaseResult
    {
        $response = $this->sendRequest('GET', "/groups?limit={$limit}&page={$page}");
        return new BaseResult($response);
    }

    public function createGroup(CreateNewGroupRequest $request): EmailGroup
    {
        $response = $this->sendRequest('POST', '/groups', $request->toArray());
        return new EmailGroup($response);
    }

    public function deleteGroup(string $groupId): bool
    {
        $this->sendRequest('DELETE', "/groups/{$groupId}");
        return true;
    }

    public function getGroupById(string $groupId): EmailGroupWithCounts
    {
        $response = $this->sendRequest('GET', "/groups/{$groupId}");
        return new EmailGroupWithCounts($response);
    }

    public function updateGroup(string $groupId, RenameGroupRequest $request): bool
    {
        $this->sendRequest('PUT', "/groups/{$groupId}", $request->toArray());
        return true;
    }

    // Subscribers Endpoints
    public function listSubscribers(string $groupId, int $limit = 10, int $page = 1): BaseResult
    {
        $response = $this->sendRequest('GET', "/groups/{$groupId}/subscribers?limit={$limit}&page={$page}");
        return new BaseResult($response);
    }

    public function addSubscriber(string $groupId, CreateSubscriberRequest $request): bool
    {
        $this->sendRequest('POST', "/groups/{$groupId}/subscribers", $request->toArray());
        return true;
    }

    public function deleteSubscriber(string $groupId, DeleteSubscriberRequest $request): bool
    {
        $this->sendRequest('DELETE', "/groups/{$groupId}/subscribers", $request->toArray());
        return true;
    }

    public function getSubscriberByEmail(string $groupId, string $email): Subscriber
    {
        $response = $this->sendRequest('GET', "/groups/{$groupId}/subscribers/{$email}");
        return new Subscriber($response);
    }

    // Messages Endpoints
    public function getMessageInfo(string $scheduleId, string $email): GetMessageInfoResponse
    {
        $response = $this->sendRequest('GET', "/messages/{$scheduleId}/{$email}");
        return new GetMessageInfoResponse($response);
    }

    public function cancelScheduledMessage(CancelScheduledMessageRequest $request): bool
    {
        $this->sendRequest('POST', '/messages/cancel-scheduled', $request->toArray());
        return true;
    }

    public function sendMarketing(SendMarketingRequest $request): Schedule
    {
        $response = $this->sendRequest('POST', '/messages/marketing', $request->toArray());
        return new Schedule($response);
    }

    public function sendMessageByTemplate(SendMessageByTemplateRequest $request): Schedule
    {
        $response = $this->sendRequest('POST', '/messages/marketing-by-template', $request->toArray());
        return new Schedule($response);
    }

    public function getScheduleInfo(string $scheduleId): GetScheduleInfoResponse
    {
        $response = $this->sendRequest('GET', "/messages/schedule/{$scheduleId}");
        return new GetScheduleInfoResponse($response);
    }

    public function sendTransactional(SendTransactionalRequest $request): Schedule
    {
        $response = $this->sendRequest('POST', '/messages/transactional', $request->toArray());
        return new Schedule($response);
    }

    public function sendTransactionalByTemplate(SendMessageByTemplateRequest $request): Schedule
    {
        $response = $this->sendRequest('POST', '/messages/transactional-by-template', $request->toArray());
        return new Schedule($response);
    }

    // Outbound IP Endpoints
    public function createIpGroup(CreateIpGroupRequest $request): IPGroup
    {
        $response = $this->sendRequest('POST', '/outbound/ip-group/create', $request->toArray());
        return new IPGroup($response);
    }

    public function getIpGroupInfo(string $name): IPGroup
    {
        $response = $this->sendRequest('GET', "/outbound/ip-group/info/{$name}");
        return new IPGroup($response);
    }

    public function listIpGroups(): array
    {
        $response = $this->sendRequest('GET', '/outbound/ip-group/list');
        return array_map(fn($data) => new IPGroup($data), $response);
    }

    public function cancelWarmup(CancelWarmUpRequest $request): CancelWarmUpResponse
    {
        $response = $this->sendRequest('POST', '/outbound/ip/cancel-warmup', $request->toArray());
        return new CancelWarmUpResponse($response);
    }

    public function getIpInfo(string $ip): IpAddress
    {
        $response = $this->sendRequest('GET', "/outbound/ip/info/{$ip}");
        return new IpAddress($response);
    }

    public function listIps(): array
    {
        $response = $this->sendRequest('GET', '/outbound/ip/list');
        return array_map(fn($data) => new IpAddress($data), $response);
    }

    public function setIpGroup(SetIpGroupRequest $request): SetIpGroupResponse
    {
        $response = $this->sendRequest('POST', '/outbound/ip/set-ip-group', $request->toArray());
        return new SetIpGroupResponse($response);
    }

    public function startWarmup(StartWarmUpRequest $request): StartWarmUpResponse
    {
        $response = $this->sendRequest('POST', '/outbound/ip/start-warmup', $request->toArray());
        return new StartWarmUpResponse($response);
    }
}
