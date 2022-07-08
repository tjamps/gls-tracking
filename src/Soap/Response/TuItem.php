<?php

namespace Tjamps\GlsTracking\Soap\Response;

use DateTimeImmutable;

class TuItem
{
    /** @var DateTimeImmutable  */
    private $initialDateTime;
    /** @var string  */
    private $referenceNo;
    /** @var string  */
    private $eventCodeNo;
    /** @var string  */
    private $eventReasonNo;
    /** @var string  */
    private $countryCode;
    /** @var string  */
    private $zipCode;
    /** @var string  */
    private $city;
    /** @var string  */
    private $consigneeName;
     /** @var string  */
    private $referenceKey;
    /** @var string  */
    private $currentStatus;

    public function __construct(
        string $referenceNo,
        DateTimeImmutable $initialDateTime,
        string $eventCodeNo,
        string $eventReasonNo,
        string $countryCode,
        string $zipCode,
        string $city,
        string $consigneeName,
        string $referenceKey,
        string $currentStatus
    ) {
        $this->referenceNo = $referenceNo;
        $this->initialDateTime = $initialDateTime;
        $this->eventCodeNo = $eventCodeNo;
        $this->eventReasonNo = $eventReasonNo;
        $this->countryCode = $countryCode;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->consigneeName = $consigneeName;
        $this->referenceKey = $referenceKey;
        $this->currentStatus = $currentStatus;
    }

    public function getReferenceNo(): string
    {
        return $this->referenceNo;
    }

    public function getInitialDateTime(): DateTimeImmutable
    {
        return $this->initialDateTime;
    }

    public function getEventCodeNo(): string
    {
        return $this->eventCodeNo;
    }

    public function getEventReasonNo(): string
    {
        return $this->eventReasonNo;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getConsigneeName(): string
    {
        return $this->consigneeName;
    }

    public function getReferenceKey(): string
    {
        return $this->referenceKey;
    }

    public function getCurrentStatus(): string
    {
        return $this->currentStatus;
    }
}
