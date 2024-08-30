<?php

namespace Mepost\Models\Requests;

class AddDomainRequest
{
    /**
     * @var string
     */
    private $domain;

    /**
     * Get the value of domain.
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set the value of domain.
     *
     * @param string $domain
     * @return self
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
