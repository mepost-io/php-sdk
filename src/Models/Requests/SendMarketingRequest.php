<?php

namespace Mepost\Models\Requests;

class SendMarketingRequest
{
    /**
     * @var array
     */
    private $attachments;

    /**
     * @var array
     */
    private $customization;

    /**
     * @var string
     */
    private $fromEmail;

    /**
     * @var string
     */
    private $fromName;

    /**
     * @var array
     */
    private $headers;

    /**
     * @var string
     */
    private $html;

    /**
     * @var string
     */
    private $ipGroup;

    /**
     * @var string
     */
    private $returnPath;

    /**
     * @var string
     */
    private $scheduledAt;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $text;

    /**
     * @var array
     */
    private $to;

    // Getters and Setters

    public function getAttachments(): array
    {
        return $this->attachments;
    }

    public function setAttachments(array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

    public function getCustomization(): array
    {
        return $this->customization;
    }

    public function setCustomization(array $customization): self
    {
        $this->customization = $customization;
        return $this;
    }

    public function getFromEmail(): string
    {
        return $this->fromEmail;
    }

    public function setFromEmail(string $fromEmail): self
    {
        $this->fromEmail = $fromEmail;
        return $this;
    }

    public function getFromName(): string
    {
        return $this->fromName;
    }

    public function setFromName(string $fromName): self
    {
        $this->fromName = $fromName;
        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;
        return $this;
    }

    public function getHtml(): string
    {
        return $this->html;
    }

    public function setHtml(string $html): self
    {
        $this->html = $html;
        return $this;
    }

    public function getIpGroup(): string
    {
        return $this->ipGroup;
    }

    public function setIpGroup(string $ipGroup): self
    {
        $this->ipGroup = $ipGroup;
        return $this;
    }

    public function getReturnPath(): string
    {
        return $this->returnPath;
    }

    public function setReturnPath(string $returnPath): self
    {
        $this->returnPath = $returnPath;
        return $this;
    }

    public function getScheduledAt(): string
    {
        return $this->scheduledAt;
    }

    public function setScheduledAt(string $scheduledAt): self
    {
        $this->scheduledAt = $scheduledAt;
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

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function getTo(): array
    {
        return $this->to;
    }

    public function setTo(array $to): self
    {
        $this->to = $to;
        return $this;
    }
}
