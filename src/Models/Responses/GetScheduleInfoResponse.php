<?php

namespace Mepost\Models\Responses;

class GetScheduleInfoResponse
{
    /**
     * @var ScheduleDetails
     */
    private $details;

    /**
     * @var int
     */
    private $emailReadsCount;

    /**
     * @var int
     */
    private $emailReadsUnique;

    /**
     * @var int
     */
    private $hardBounceCount;

    /**
     * @var int
     */
    private $linkClicksCount;

    /**
     * @var int
     */
    private $otherBounceCount;

    /**
     * @var string
     */
    private $senderFromEmail;

    /**
     * @var string
     */
    private $senderFromName;

    /**
     * @var int
     */
    private $softBounceCount;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $templateId;

    /**
     * @var int
     */
    private $unsubscribeCount;

    // Getter and Setter methods

    public function getDetails(): ScheduleDetails
    {
        return $this->details;
    }

    public function setDetails(ScheduleDetails $details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getEmailReadsCount(): int
    {
        return $this->emailReadsCount;
    }

    public function setEmailReadsCount(int $emailReadsCount): self
    {
        $this->emailReadsCount = $emailReadsCount;
        return $this;
    }

    public function getEmailReadsUnique(): int
    {
        return $this->emailReadsUnique;
    }

    public function setEmailReadsUnique(int $emailReadsUnique): self
    {
        $this->emailReadsUnique = $emailReadsUnique;
        return $this;
    }

    public function getHardBounceCount(): int
    {
        return $this->hardBounceCount;
    }

    public function setHardBounceCount(int $hardBounceCount): self
    {
        $this->hardBounceCount = $hardBounceCount;
        return $this;
    }

    public function getLinkClicksCount(): int
    {
        return $this->linkClicksCount;
    }

    public function setLinkClicksCount(int $linkClicksCount): self
    {
        $this->linkClicksCount = $linkClicksCount;
        return $this;
    }

    public function getOtherBounceCount(): int
    {
        return $this->otherBounceCount;
    }

    public function setOtherBounceCount(int $otherBounceCount): self
    {
        $this->otherBounceCount = $otherBounceCount;
        return $this;
    }

    public function getSenderFromEmail(): string
    {
        return $this->senderFromEmail;
    }

    public function setSenderFromEmail(string $senderFromEmail): self
    {
        $this->senderFromEmail = $senderFromEmail;
        return $this;
    }

    public function getSenderFromName(): string
    {
        return $this->senderFromName;
    }

    public function setSenderFromName(string $senderFromName): self
    {
        $this->senderFromName = $senderFromName;
        return $this;
    }

    public function getSoftBounceCount(): int
    {
        return $this->softBounceCount;
    }

    public function setSoftBounceCount(int $softBounceCount): self
    {
        $this->softBounceCount = $softBounceCount;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getTemplateId(): string
    {
        return $this->templateId;
    }

    public function setTemplateId(string $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    public function getUnsubscribeCount(): int
    {
        return $this->unsubscribeCount;
    }

    public function setUnsubscribeCount(int $unsubscribeCount): self
    {
        $this->unsubscribeCount = $unsubscribeCount;
        return $this;
    }
}
