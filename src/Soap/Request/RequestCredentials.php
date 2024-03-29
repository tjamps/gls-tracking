<?php

namespace Tjamps\GlsTracking\Soap\Request;

class RequestCredentials
{
    /** @var string  */
    private $username;
    /** @var string  */
    private $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
