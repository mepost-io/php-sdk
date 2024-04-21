<?php

namespace Mepost\Sdk;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;

class Client
{
    private $apiKey;
    private $baseUrl;
    private $httpClient;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = 'https://api.mepost.io/v1';
        $this->httpClient = new HttpClient();
    }

    public function sendEmail(array $emailData): array
    {
        return $this->makeRequest('POST', '/messages/send', $emailData);
    }

    public function sendEmailByTemplate(array $emailData, string $templateId): array
    {
        $data = [
            'message' => $emailData,
            'templateId' => $templateId
        ];
        return $this->makeRequest('POST', '/messages/send-by-template', $data);
    }

    public function getInfo(string $scheduleId, string $email): array
    {
        return $this->makeRequest('GET', "/messages/{$scheduleId}/{$email}");
    }

    public function cancelScheduledMessage(string $scheduledMessageId): array
    {
        $data = ['scheduledMessageId' => $scheduledMessageId];
        return $this->makeRequest('POST', '/messages/cancel-scheduled', $data);
    }

    public function getScheduledMessage(string $scheduleId): array
    {
        return $this->makeRequest('GET', "/messages/schedule/{$scheduleId}");
    }

    private function makeRequest(string $method, string $uri, array $data = []): array
    {
        try {
            $url = $this->baseUrl . $uri;
            $options = [
                'headers' => [
                    'Authorization' => $this->apiKey,
                    'Content-Type' => 'application/json'
                ],
                'json' => $data
            ];
            $response = $this->httpClient->request($method, $url, $options);
            return json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            throw new \Exception('API request failed: ' . $e->getMessage());
        }
    }
}
