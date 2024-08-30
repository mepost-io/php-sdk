<?php

namespace Mepost\Models\Responses;

class PricingPlan
{
    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var int
     */
    private $dailyLimit;

    /**
     * @var int
     */
    private $maximumEmail;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $planType;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $uuid;

    // Getter and Setter methods

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getDailyLimit(): int
    {
        return $this->dailyLimit;
    }

    public function setDailyLimit(int $dailyLimit): self
    {
        $this->dailyLimit = $dailyLimit;
        return $this;
    }

    public function getMaximumEmail(): int
    {
        return $this->maximumEmail;
    }

    public function setMaximumEmail(int $maximumEmail): self
    {
        $this->maximumEmail = $maximumEmail;
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

    public function getPlanType(): string
    {
        return $this->planType;
    }

    public function setPlanType(string $planType): self
    {
        $this->planType = $planType;
        return $this;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): self
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
