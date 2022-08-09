<?php

namespace Tjamps\GlsTracking;

use DateTimeImmutable;
use Tjamps\GlsTracking\Soap\Request\GetTuListRequest;
use Tjamps\GlsTracking\Soap\Request\RequestCredentials;
use Tjamps\GlsTracking\Soap\Response\ExitCode;
use Tjamps\GlsTracking\Soap\Response\TuListResponse;
use Tjamps\GlsTracking\Soap\SoapClient;

class SoapTrackingApi
{
    private $username;
    private $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getParcelsList(
        string $language = 'EN',
        string $customRef = '',
        string $refValue = '',
        ?DateTimeImmutable $from = null,
        ?DateTimeImmutable $to = null
    ): TuListResponse {
        $client = new SoapClient();

        $request = new GetTuListRequest(
            new RequestCredentials($this->username, $this->password),
            $customRef,
            $from,
            $to,
            $refValue,
            $language
        );

        $response = $client->request($request);

        return new TuListResponse(
            new ExitCode($response->ExitCode->ErrorCode, $response->ExitCode->ErrorDscr),
            $response->TUList ?? []
        );
    }
}
