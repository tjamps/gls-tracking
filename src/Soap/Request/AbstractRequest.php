<?php

namespace Tjamps\GlsTracking\Soap\Request;

abstract class AbstractRequest implements RequestInterface
{
    /** @var RequestCredentials  */
    protected $credentials;

    public function __construct(RequestCredentials $credentials)
    {
        $this->credentials = $credentials;
    }
}
