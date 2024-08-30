<?php

namespace Mepost\Models\Requests;

class CancelWarmUpRequest
{
    /**
     * @var string
     */
    private $ipAddress;

    /**
     * Get the value of ipAddress.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set the value of ipAddress.
     *
     * @param string $ipAddress
     * @return self
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}
