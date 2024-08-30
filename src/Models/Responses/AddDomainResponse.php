<?php

namespace Mepost\Models\Responses;

class AddDomainResponse
{
    /**
     * @var DNSRecord
     */
    private $dkim;

    /**
     * @var DNSRecord
     */
    private $dmarc;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var DNSRecord
     */
    private $spf;

    // Getter and Setter methods

    public function getDkim(): DNSRecord
    {
        return $this->dkim;
    }

    public function setDkim(DNSRecord $dkim): self
    {
        $this->dkim = $dkim;
        return $this;
    }

    public function getDmarc(): DNSRecord
    {
        return $this->dmarc;
    }

    public function setDmarc(DNSRecord $dmarc): self
    {
        $this->dmarc = $dmarc;
        return $this;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;
        return $this;
    }

    public function getSpf(): DNSRecord
    {
        return $this->spf;
    }

    public function setSpf(DNSRecord $spf): self
    {
        $this->spf = $spf;
        return $this;
    }
}
