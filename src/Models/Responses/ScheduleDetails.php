<?php

namespace Mepost\Models\Responses;

class ScheduleDetails
{
    /**
     * @var EmailTransactionEvent[]
     */
    private $clicks;

    /**
     * @var EmailTransactionEvent[]
     */
    private $hardBounces;

    /**
     * @var EmailTransactionEvent[]
     */
    private $reads;

    /**
     * @var EmailTransactionEvent[]
     */
    private $softBounces;

    /**
     * @var EmailTransactionEvent[]
     */
    private $unsubscribes;

    // Getter and Setter methods

    public function getClicks(): array
    {
        return $this->clicks;
    }

    public function setClicks(array $clicks): self
    {
        $this->clicks = $clicks;
        return $this;
    }

    public function getHardBounces(): array
    {
        return $this->hardBounces;
    }

    public function setHardBounces(array $hardBounces): self
    {
        $this->hardBounces = $hardBounces;
        return $this;
    }

    public function getReads(): array
    {
        return $this->reads;
    }

    public function setReads(array $reads): self
    {
        $this->reads = $reads;
        return $this;
    }

    public function getSoftBounces(): array
    {
        return $this->softBounces;
    }

    public function setSoftBounces(array $softBounces): self
    {
        $this->softBounces = $softBounces;
        return $this;
    }

    public function getUnsubscribes(): array
    {
        return $this->unsubscribes;
    }

    public function setUnsubscribes(array $unsubscribes): self
    {
        $this->unsubscribes = $unsubscribes;
        return $this;
    }
}
