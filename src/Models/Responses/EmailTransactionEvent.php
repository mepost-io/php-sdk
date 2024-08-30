<?php

namespace Mepost\Models\Responses;

class EmailTransactionEvent
{
    /**
     * @var string
     */
    private $bounceCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $data;

    /**
     * @var string
     */
    private $eventType;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $statId;

    /**
     * @var string
     */
    private $subscriberId;

    /**
     * @var string
     */
    private $transactionId;

    // Getter and Setter methods

    public function getBounceCode(): string
    {
        return $this->bounceCode;
    }

    public function setBounceCode(string $bounceCode): self
    {
        $this->bounceCode = $bounceCode;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;
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

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function getEventType(): string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
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

    public function getStatId(): string
    {
        return $this->statId;
    }

    public function setStatId(string $statId): self
    {
        $this->statId = $statId;
        return $this;
    }

    public function getSubscriberId(): string
    {
        return $this->subscriberId;
    }

    public function setSubscriberId(string $subscriberId): self
    {
        $this->subscriberId = $subscriberId;
        return $this;
    }

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;
        return $this;
    }
}
