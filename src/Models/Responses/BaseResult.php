<?php

namespace Mepost\Models\Responses;

class BaseResult
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var int
     */
    private $total;

    // Getter and Setter methods

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;
        return $this;
    }
}
