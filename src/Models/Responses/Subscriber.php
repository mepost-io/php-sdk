<?php

namespace Mepost\Models\Responses;

class Subscriber
{
    /**
     * @var bool
     */
    private $bounced;

    /**
     * @var string
     */
    private $confirmCode;

    /**
     * @var string
     */
    private $confirmIp;

    /**
     * @var bool
     */
    private $confirmed;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var CustomField[]
     */
    private $customFields;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var int
     */
    private $emailGroupId;

    /**
     * @var \DateTime
     */
    private $subscribedAt;

    /**
     * @var bool
     */
    private $unsubscribed;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $uuid;

    // Getter and Setter methods

    public function getBounced(): bool
    {
        return $this->bounced;
    }

    public function setBounced(bool $bounced): self
    {
        $this->bounced = $bounced;
        return $this;
    }

    public function getConfirmCode(): string
    {
        return $this->confirmCode;
    }

    public function setConfirmCode(string $confirmCode): self
    {
        $this->confirmCode = $confirmCode;
        return $this;
    }

    public function getConfirmIp(): string
    {
        return $this->confirmIp;
    }

    public function setConfirmIp(string $confirmIp): self
    {
        $this->confirmIp = $confirmIp;
        return $this;
    }

    public function isConfirmed(): bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): self
    {
        $this->confirmed = $confirmed;
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

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;
        return $this;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
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

    public function getSubscribedAt(): \DateTime
    {
        return $this->subscribedAt;
    }

    public function setSubscribedAt(\DateTime $subscribedAt): self
    {
        $this->subscribedAt = $subscribedAt;
        return $this;
    }

    public function isUnsubscribed(): bool
    {
        return $this->unsubscribed;
    }

    public function setUnsubscribed(bool $unsubscribed): self
    {
        $this->unsubscribed = $unsubscribed;
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
