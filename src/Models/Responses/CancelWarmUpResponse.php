<?php

namespace Mepost\Models\Responses;

class CancelWarmUpResponse
{
    /**
     * @var string
     */
    private $cancelledAt;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var string
     */
    private $startedAt;

    // Getter and Setter methods

    public function getCancelledAt(): string
    {
        return $this->cancelledAt;
    }

    public function setCancelledAt(string $cancelledAt): self
    {
        $this->cancelledAt = $cancelledAt;
        return $this;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getStartedAt(): string
    {
        return $this->startedAt;
    }

    public function setStartedAt(string $startedAt): self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
}
