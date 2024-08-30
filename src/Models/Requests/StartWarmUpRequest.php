<?php

namespace Mepost\Models\Requests;

class StartWarmUpRequest
{
    /**
     * @var string
     */
    private $ipAddress;

    // Getter and Setter

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}
