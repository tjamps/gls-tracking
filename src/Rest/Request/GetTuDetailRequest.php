<?php

namespace Tjamps\GlsTracking\Rest\Request;

class GetTuDetailRequest
{
    private const URL_FORMAT = 'https://api.gls-group.eu/public/v1/tracking/references/%s';
    /** @var string  */
    private $referenceNumber;

    public function __construct(string $referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }

    public function getUrl(): string
    {
        return sprintf(self::URL_FORMAT, $this->referenceNumber);
    }
}
