<?php

namespace Mepost\Models\Requests;

class To
{
    /**
     * @var array
     */
    private $customization;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    // Getter and Setter methods

    public function getCustomization(): array
    {
        return $this->customization;
    }

    public function setCustomization(array $customization): self
    {
        $this->customization = $customization;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
