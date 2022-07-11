<?php

namespace Tjamps\GlsTracking\Soap\Response;

class TuItem
{
    private string $referenceNo;
    private \DateTimeImmutable $initialDateTime;
    private string $eventCodeNo;
    private string $eventReasonNo;
    private string $countryCode;
    private string $zipCode;
    private string $city;
    private string $consigneeName;
    private string $referenceKey;
    private string $currentStatus;

    public function __construct(
        string $referenceNo,
        \DateTimeImmutable $initialDateTime,
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

    public function getInitialDateTime(): \DateTimeImmutable
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
