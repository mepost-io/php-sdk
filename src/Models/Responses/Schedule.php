<?php

namespace Mepost\Models\Responses;

class Schedule
{
    /**
     * @var bool
     */
    private $approved;

    /**
     * @var bool
     */
    private $authorizedToSend;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var float
     */
    private $creditAmount;

    /**
     * @var int
     */
    private $emailGroupId;

    /**
     * @var string
     */
    private $jobStatus;

    /**
     * @var string
     */
    private $jobType;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var string
     */
    private $resultType;

    /**
     * @var \DateTime
     */
    private $scheduledAt;

    /**
     * @var string
     */
    private $statId;

    /**
     * @var Template
     */
    private $template;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $uuid;

    // Getter and Setter methods

    public function isApproved(): bool
    {
        return $this->approved;
    }

    public function setApproved(bool $approved): self
    {
        $this->approved = $approved;
        return $this;
    }

    public function isAuthorizedToSend(): bool
    {
        return $this->authorizedToSend;
    }

    public function setAuthorizedToSend(bool $authorizedToSend): self
    {
        $this->authorizedToSend = $authorizedToSend;
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

    public function getCreditAmount(): float
    {
        return $this->creditAmount;
    }

    public function setCreditAmount(float $creditAmount): self
    {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    public function getEmailGroupId(): int
    {
        return $this->emailGroupId;
    }

    public function setEmailGroupId(int $emailGroupId): self
    {
        $this->emailGroupId = $emailGroupId;
        return $this;
    }

    public function getJobStatus(): string
    {
        return $this->jobStatus;
    }

    public function setJobStatus(string $jobStatus): self
    {
        $this->jobStatus = $jobStatus;
        return $this;
    }

    public function getJobType(): string
    {
        return $this->jobType;
    }

    public function setJobType(string $jobType): self
    {
        $this->jobType = $jobType;
        return $this;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    public function getResultType(): string
    {
        return $this->resultType;
    }

    public function setResultType(string $resultType): self
    {
        $this->resultType = $resultType;
        return $this;
    }

    public function getScheduledAt(): \DateTime
    {
        return $this->scheduledAt;
    }

    public function setScheduledAt(\DateTime $scheduledAt): self
    {
        $this->scheduledAt = $scheduledAt;
        return $this;
    }

    public function getStatId(): string
    {
        return $this->statId;
    }

    public function setStatId(string $statId): self
    {
        $this->statId = $statId;
        return $this;
    }

    public function getTemplate(): Template
    {
        return $this->template;
    }

    public function setTemplate(Template $template): self
    {
        $this->template = $template;
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
