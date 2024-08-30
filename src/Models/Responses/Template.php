<?php

namespace Mepost\Models\Responses;

class Template
{
    /**
     * @var string
     */
    private $config;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $rawHtml;

    /**
     * @var string
     */
    private $rawText;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $uuid;

    // Getter and Setter methods

    public function getConfig(): string
    {
        return $this->config;
    }

    public function setConfig(string $config): self
    {
        $this->config = $config;
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getRawHtml(): string
    {
        return $this->rawHtml;
    }

    public function setRawHtml(string $rawHtml): self
    {
        $this->rawHtml = $rawHtml;
        return $this;
    }

    public function getRawText(): string
    {
        return $this->rawText;
    }

    public function setRawText(string $rawText): self
    {
        $this->rawText = $rawText;
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
