<?php

namespace Mepost\Models\Requests;

class CreateIpGroupRequest
{
    /**
     * @var string
     */
    private $groupName;

    /**
     * Get the value of groupName.
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set the value of groupName.
     *
     * @param string $groupName
     * @return self
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }
}
