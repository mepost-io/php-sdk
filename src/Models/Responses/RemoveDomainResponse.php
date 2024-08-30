<?php

namespace Mepost\Models\Responses;

class RemoveDomainResponse
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $removedAt;

    // Getter and Setter methods

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;
        return $this;
    }

    public function getRemovedAt(): string
    {
        return $this->removedAt;
    }

    public function setRemovedAt(string $removedAt): self
    {
        $this->removedAt = $removedAt;
        return $this;
    }
}
