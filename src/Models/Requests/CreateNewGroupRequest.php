<?php

namespace Mepost\Models\Requests;

class CreateNewGroupRequest
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $to;

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of to.
     *
     * @return array
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set the value of to.
     *
     * @param array $to
     * @return self
     */
    public function setTo(array $to)
    {
        $this->to = $to;
        return $this;
    }
}
