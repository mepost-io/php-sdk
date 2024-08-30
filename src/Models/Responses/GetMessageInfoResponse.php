<?php

namespace Mepost\Models\Responses;

class GetMessageInfoResponse
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $emailClicksCount;

    /**
     * @var EmailClickDetail[]
     */
    private $emailClicksDetail;

    /**
     * @var int
     */
    private $emailReadsCount;

    /**
     * @var EmailReadDetail[]
     */
    private $emailReadsDetail;

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

    // Getter and Setter methods

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getEmailClicksCount(): int
    {
        return $this->emailClicksCount;
    }

    public function setEmailClicksCount(int $emailClicksCount): self
    {
        $this->emailClicksCount = $emailClicksCount;
        return $this;
    }

    /**
     * @return EmailClickDetail[]
     */
    public function getEmailClicksDetail(): array
    {
        return $this->emailClicksDetail;
    }

    /**
     * @param EmailClickDetail[] $emailClicksDetail
     */
    public function setEmailClicksDetail(array $emailClicksDetail): self
    {
        $this->emailClicksDetail = $emailClicksDetail;
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

    /**
     * @return EmailReadDetail[]
     */
    public function getEmailReadsDetail(): array
    {
        return $this->emailReadsDetail;
    }

    /**
     * @param EmailReadDetail[] $emailReadsDetail
     */
    public function setEmailReadsDetail(array $emailReadsDetail): self
    {
        $this->emailReadsDetail = $emailReadsDetail;
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
}
