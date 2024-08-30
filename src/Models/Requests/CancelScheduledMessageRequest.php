<?php

namespace Mepost\Models\Requests;

class CancelScheduledMessageRequest
{
    /**
     * @var string
     */
    private $scheduledMessageId;

    /**
     * Get the value of scheduledMessageId.
     *
     * @return string
     */
    public function getScheduledMessageId()
    {
        return $this->scheduledMessageId;
    }

    /**
     * Set the value of scheduledMessageId.
     *
     * @param string $scheduledMessageId
     * @return self
     */
    public function setScheduledMessageId($scheduledMessageId)
    {
        $this->scheduledMessageId = $scheduledMessageId;
        return $this;
    }
}
