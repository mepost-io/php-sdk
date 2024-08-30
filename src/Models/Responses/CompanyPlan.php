<?php

namespace Mepost\Models\Responses;

class CompanyPlan
{
    /**
     * @var int
     */
    private $companyId;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var int
     */
    private $currentUsage;

    /**
     * @var \DateTime
     */
    private $endedAt;

    /**
     * @var \DateTime
     */
    private $lastBilled;

    /**
     * @var PricingPlan
     */
    private $pricingPlan;

    /**
     * @var int
     */
    private $pricingPlanId;

    /**
     * @var int
     */
    private $selectedContactsLimit;

    /**
     * @var int
     */
    private $selectedDataRetention;

    /**
     * @var int
     */
    private $selectedEmailLimit;

    /**
     * @var \DateTime
     */
    private $startedAt;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
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

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getCurrentUsage(): int
    {
        return $this->currentUsage;
    }

    public function setCurrentUsage(int $currentUsage): self
    {
        $this->currentUsage = $currentUsage;
        return $this;
    }

    public function getEndedAt(): \DateTime
    {
        return $this->endedAt;
    }

    public function setEndedAt(\DateTime $endedAt): self
    {
        $this->endedAt = $endedAt;
        return $this;
    }

    public function getLastBilled(): \DateTime
    {
        return $this->lastBilled;
    }

    public function setLastBilled(\DateTime $lastBilled): self
    {
        $this->lastBilled = $lastBilled;
        return $this;
    }

    public function getPricingPlan(): PricingPlan
    {
        return $this->pricingPlan;
    }

    public function setPricingPlan(PricingPlan $pricingPlan): self
    {
        $this->pricingPlan = $pricingPlan;
        return $this;
    }

    public function getPricingPlanId(): int
    {
        return $this->pricingPlanId;
    }

    public function setPricingPlanId(int $pricingPlanId): self
    {
        $this->pricingPlanId = $pricingPlanId;
        return $this;
    }

    public function getSelectedContactsLimit(): int
    {
        return $this->selectedContactsLimit;
    }

    public function setSelectedContactsLimit(int $selectedContactsLimit): self
    {
        $this->selectedContactsLimit = $selectedContactsLimit;
        return $this;
    }

    public function getSelectedDataRetention(): int
    {
        return $this->selectedDataRetention;
    }

    public function setSelectedDataRetention(int $selectedDataRetention): self
    {
        $this->selectedDataRetention = $selectedDataRetention;
        return $this;
    }

    public function getSelectedEmailLimit(): int
    {
        return $this->selectedEmailLimit;
    }

    public function setSelectedEmailLimit(int $selectedEmailLimit): self
    {
        $this->selectedEmailLimit = $selectedEmailLimit;
        return $this;
    }

    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }

    public function setStartedAt(\DateTime $startedAt): self
    {
        $this->startedAt = $startedAt;
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
