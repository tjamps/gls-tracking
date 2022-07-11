<?php

namespace Tjamps\GlsTracking\Soap\Request;

use ReflectionClass;

abstract class AbstractRequest
{
    protected RequestCredentials $credentials;

    public abstract function toArray(): array;

    public function __construct(RequestCredentials $credentials)
    {
        $this->credentials = $credentials;
    }

    public function getCredentials(): RequestCredentials
    {
        return $this->credentials;
    }

    public function getSoapFunctionName(): string
    {
        return str_replace('Request', '', (new ReflectionClass($this))->getShortName());
    }
}
