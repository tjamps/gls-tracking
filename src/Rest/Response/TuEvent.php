<?php

namespace Tjamps\GlsTracking\Rest\Response;

class TuEvent
{
    /** @var \DateTimeImmutable  */
    private $timestamp;
    /** @var string  */
    private $location;
    /** @var string  */
    private $country;
    /** @var string  */
    private $code;
    /** @var string  */
    private $description;

    public function __construct(
        \DateTimeImmutable $timestamp,
        string $description,
        string $location,
        string $country,
        string $code
    ) {
        $this->timestamp = $timestamp;
        $this->description = $description;
        $this->location = $location;
        $this->country = $country;
        $this->code = $code;
    }

    public function getTimestamp(): \DateTimeImmutable
    {
        return $this->timestamp;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
