<?php

namespace Mepost\Models\Requests;

class SendMessageByTemplateRequest
{
    /**
     * @var MessageDto
     */
    private $message;

    /**
     * @var string
     */
    private $templateId;

    // Getters and Setters

    public function getMessage(): MessageDto
    {
        return $this->message;
    }

    public function setMessage(MessageDto $message): self
    {
        $this->message = $message;
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
}
