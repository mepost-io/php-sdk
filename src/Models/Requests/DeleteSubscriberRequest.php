<?php

namespace Mepost\Models\Requests;

class DeleteSubscriberRequest
{
    /**
     * @var array
     */
    private $emails;

    /**
     * Get the value of emails.
     *
     * @return array
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Set the value of emails.
     *
     * @param array $emails
     * @return self
     */
    public function setEmails(array $emails)
    {
        $this->emails = $emails;
        return $this;
    }
}
