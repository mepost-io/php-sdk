<?php

namespace Mepost\Models\Responses;

class EmailGroup
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
    private $generalScore;

    /**
     * @var bool
     */
    private $isWeb;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $newsletterScore;

    /**
     * @var int
     */
    private $priority;

    /**
     * @var int
     */
    private $totalActiveSubscriber;

    /**
     * @var int
     */
    private $totalSubscriber;

    /**
     * @var int
     */
    private $totalUnsubscribe;

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

    public function getGeneralScore(): int
    {
        return $this->generalScore;
    }

    public function setGeneralScore(int $generalScore): self
    {
        $this->generalScore = $generalScore;
        return $this;
    }

    public function getIsWeb(): bool
    {
        return $this->isWeb;
    }

    public function setIsWeb(bool $isWeb): self
    {
        $this->isWeb = $isWeb;
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

    public function getNewsletterScore(): int
    {
        return $this->newsletterScore;
    }

    public function setNewsletterScore(int $newsletterScore): self
    {
        $this->newsletterScore = $newsletterScore;
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

    public function getTotalActiveSubscriber(): int
    {
        return $this->totalActiveSubscriber;
    }

    public function setTotalActiveSubscriber(int $totalActiveSubscriber): self
    {
        $this->totalActiveSubscriber = $totalActiveSubscriber;
        return $this;
    }

    public function getTotalSubscriber(): int
    {
        return $this->totalSubscriber;
    }

    public function setTotalSubscriber(int $totalSubscriber): self
    {
        $this->totalSubscriber = $totalSubscriber;
        return $this;
    }

    public function getTotalUnsubscribe(): int
    {
        return $this->totalUnsubscribe;
    }

    public function setTotalUnsubscribe(int $totalUnsubscribe): self
    {
        $this->totalUnsubscribe = $totalUnsubscribe;
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
