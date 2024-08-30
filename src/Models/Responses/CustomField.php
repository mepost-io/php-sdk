<?php

namespace Mepost\Models\Responses;

class CustomField
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    // Getter and Setter methods

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
