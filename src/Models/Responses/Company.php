<?php

namespace Mepost\Models\Responses;

class Company
{
    /**
     * @var CompanyPlan
     */
    private $companyPlan;

    /**
     * @var int
     */
    private $companyPlanId;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $footerHtml;

    /**
     * @var string
     */
    private $footerText;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $ownerId;

    /**
     * @var int
     */
    private $priority;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $uuid;

    // Getter and Setter methods

    public function getCompanyPlan(): CompanyPlan
    {
        return $this->companyPlan;
    }

    public function setCompanyPlan(CompanyPlan $companyPlan): self
    {
        $this->companyPlan = $companyPlan;
        return $this;
    }

    public function getCompanyPlanId(): int
    {
        return $this->companyPlanId;
    }

    public function setCompanyPlanId(int $companyPlanId): self
    {
        $this->companyPlanId = $companyPlanId;
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

    public function getFooterHtml(): string
    {
        return $this->footerHtml;
    }

    public function setFooterHtml(string $footerHtml): self
    {
        $this->footerHtml = $footerHtml;
        return $this;
    }

    public function getFooterText(): string
    {
        return $this->footerText;
    }

    public function setFooterText(string $footerText): self
    {
        $this->footerText = $footerText;
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

    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    public function setOwnerId(int $ownerId): self
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;
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
