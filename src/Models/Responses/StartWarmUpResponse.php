<?php

namespace Mepost\Models\Responses;

class StartWarmUpResponse
{
    /**
     * @var string
     */
    private $endAt;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var string
     */
    private $startAt;

    /**
     * @var string
     */
    private $status;

    // Getter and Setter methods

    public function getEndAt(): string
    {
        return $this->endAt;
    }

    public function setEndAt(string $endAt): self
    {
        $this->endAt = $endAt;
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

    public function getStartAt(): string
    {
        return $this->startAt;
    }

    public function setStartAt(string $startAt): self
    {
        $this->startAt = $startAt;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
