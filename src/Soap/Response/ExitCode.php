<?php

namespace Tjamps\GlsTracking\Soap\Response;

class ExitCode
{
    private const CODE_OK = 0;
    /** @var int  */
    private $code;
    /** @var string  */
    private $description;

    public function __construct(int $code, string $description)
    {
        $this->code = $code;
        $this->description = $description;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isSuccessful(): bool
    {
        return $this->code === self::CODE_OK;
    }
}
