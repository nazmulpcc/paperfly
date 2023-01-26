<?php

namespace Nazmul\Paperfly;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Nazmul\Paperfly\DTO\OrderCreationRequestDto;
use Nazmul\Paperfly\DTO\MerchantRegistrationDto;
use Nazmul\Paperfly\DTO\MerchantRegistrationResponse;
use Nazmul\Paperfly\DTO\OrderResponseDto;
use Psr\Http\Message\ResponseInterface;

class Paperfly
{
    protected Client $client;
    protected ?ResponseInterface $response = null;

    public function __construct(string $username, string $password, string $key, array $options = [])
    {
        $this->client = new Client([
            'auth' => [$username, $password],
            'headers' => ['Paperflykey' => $key],
            'base_uri' => $options['base_uri'] ?? 'https://staging.paperfly-bd.com',
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function registerChildMerchant(MerchantRegistrationDto $data): MerchantRegistrationResponse
    {
        $response = $this->sendRequest('MerchantRegistration', $data->toArray());

        if (isset($response['success'])) {
            return MerchantRegistrationResponse::fromSuccess($response);
        }else{
            return MerchantRegistrationResponse::fromError($response);
        }
    }

    /**
     * @throws GuzzleException
     */
    public function createOrder(OrderCreationRequestDto $data): OrderResponseDto
    {
        $response = $this->sendRequest('NewOrderUpload', $data->toArray());

        if (isset($response['success'])) {
            return OrderResponseDto::fromSuccess($response);
        }else{
            return OrderResponseDto::fromError($response);
        }
    }

    /**
     * @throws GuzzleException
     */
    public function trackOrder(string $orderReference, string $merchantCode): array
    {
        return $this->sendRequest('API-Order-Tracking', [
            'ReferenceNumber' => $orderReference,
            'merchantCode' => $merchantCode
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function cancelOrder(string $orderReference, string $merchantCode): array
    {
        return $this->sendRequest('api/v1/cancel-order/', [
            'order_id' => $orderReference,
            'merchantCode' => $merchantCode
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function sendRequest(string $uri, array $data = [], string $method = 'POST'): array
    {
        $options = [];

        if ($method === 'POST') {
            $options['json'] = $data;
        } else {
            $options['query'] = $data;
        }

        try {
            $this->response = $this->client->request($method, $uri, $options);
        }catch (ClientException $e){
            $this->response = $e->getResponse();
        }
        return json_decode($this->response->getBody()->getContents(), true);
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
