<?php

namespace Mepost\Models\Responses;

class IpAddress
{
    /**
     * @var int
     */
    private $companyId;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var int
     */
    private $ipGroupId;

    /**
     * @var string
     */
    private $reverseDNS;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $uuid;

    // Getter and Setter methods

    public function getCompanyId(): int
    {
        return $this->companyId;
    }

    public function setCompanyId(int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }

    public function getIpGroupId(): int
    {
        return $this->ipGroupId;
    }

    public function setIpGroupId(int $ipGroupId): self
    {
        $this->ipGroupId = $ipGroupId;
        return $this;
    }

    public function getReverseDNS(): string
    {
        return $this->reverseDNS;
    }

    public function setReverseDNS(string $reverseDNS): self
    {
        $this->reverseDNS = $reverseDNS;
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

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;
        return $this;
    }
}
