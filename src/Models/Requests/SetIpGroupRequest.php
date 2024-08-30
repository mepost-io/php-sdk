<?php

namespace Mepost\Models\Requests;

class SetIpGroupRequest
{
    /**
     * @var string
     */
    private $groupName;

    /**
     * @var string
     */
    private $ipAddress;

    // Getters and Setters

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): self
    {
        $this->groupName = $groupName;
        return $this;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}
