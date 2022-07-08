<?php

namespace Tjamps\GlsTracking\Soap\Request;

interface RequestInterface
{
    public function toArray(): array;
    public function getSoapFunctionName(): string;
}
