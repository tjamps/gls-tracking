<?php

namespace Tjamps\GlsTracking\Soap\Response;

use Exception;

abstract class AbstractResponse
{
    /** @var ExitCode  */
    protected $exitCode;

    public function __construct(ExitCode $exitCode)
    {
        $this->exitCode = $exitCode;
        if (!$this->exitCode->isSuccessful()) {
            throw new Exception($exitCode->getDescription(), $exitCode->getCode());
        }
    }

    public function getExitCode(): ExitCode
    {
        return $this->exitCode;
    }

    public function isSuccessful(): bool
    {
        return $this->exitCode->isSuccessful();
    }
}
