<?php

namespace Mepost\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class ApiHelper
{
    /**
     * Sends an HTTP request to the Mepost API.
     *
     * @param string $method The HTTP method to use (GET, POST, PUT, DELETE).
     * @param string $url The API endpoint URL.
     * @param array|null $body The request body, if any.
     * @param string $apiKey The API key for authorization.
     * @return array The decoded response from the API.
     * @throws \Exception if an error occurs during the request.
     */
    public static function sendRequest(string $method, string $url, ?array $body = null, string $apiKey): array
    {
        $client = new Client();
        $headers = [
            'Authorization' => $apiKey,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];

        try {
            $response = $client->request($method, $url, [
                'headers' => $headers,
                'json' => $body
            ]);

            return self::handleResponse($response);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $errorResponse = $e->getResponse();
                $errorBody = $errorResponse->getBody()->getContents();
                throw new \Exception("API request error: {$errorBody}", $errorResponse->getStatusCode());
            }
            throw new \Exception("API request error: {$e->getMessage()}");
        }
    }

    /**
     * Handles the API response, decoding the JSON data.
     *
     * @param ResponseInterface $response The response object.
     * @return array The decoded response data.
     * @throws \Exception if an error occurs during JSON decoding.
     */
    private static function handleResponse(ResponseInterface $response): array
    {
        $body = $response->getBody()->getContents();
        $data = json_decode($body, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Failed to decode API response: ' . json_last_error_msg());
        }

        return $data;
    }
}
