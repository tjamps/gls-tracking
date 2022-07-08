<?php

namespace Tjamps\GlsTracking;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Tjamps\GlsTracking\Rest\Request\GetTuDetailRequest;
use Tjamps\GlsTracking\Rest\Response\TuDetailResponse;

class RestTrackingApi
{
    private $username;
    private $password;
    private $httpClient;

    public function __construct(string $username, string $password, HttpClientInterface $httpClient = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->httpClient = $httpClient ?? HttpClient::create();
    }

    public function getParcelDetails(string $referenceNumber, string $language = 'en'): TuDetailResponse
    {
        $request = new GetTuDetailRequest($referenceNumber);

        $httpResponse = $this->httpClient->request('GET', $request->getUrl(), [
            'auth_basic' => [$this->username, $this->password],
            'headers' => [
                'Accept-Language' => $language,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        ]);

        return new TuDetailResponse($httpResponse->toArray());
    }
}
