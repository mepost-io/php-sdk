<?php

namespace Mepost\Models\Responses;

class IPGroup
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
     * @var IpAddress[]
     */
    private $ipAddresses;

    /**
     * @var string
     */
    private $name;

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

    public function getIpAddresses(): array
    {
        return $this->ipAddresses;
    }

    public function setIpAddresses(array $ipAddresses): self
    {
        $this->ipAddresses = $ipAddresses;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
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
