<?php

namespace Mepost\Models\Requests;

class CreateSubscriberRequest
{
    /**
     * @var array
     */
    private $to;

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
