<?php

namespace Mepost\Models\Responses;

use Mepost\Models\Responses\IPGroup;

class SetIpGroupResponse
{
    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var IPGroup
     */
    private $ipGroup;

    // Getter and Setter methods

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getIpGroup(): IPGroup
    {
        return $this->ipGroup;
    }

    public function setIpGroup(IPGroup $ipGroup): self
    {
        $this->ipGroup = $ipGroup;
        return $this;
    }
}
