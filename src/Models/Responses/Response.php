<?php

namespace Mepost\Models\Responses;

class Response
{
    /**
     * @var bool
     */
    private $success;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @var array|null
     */
    private $errors;

    // Getter and Setter methods

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }

    public function getErrors(): ?array
    {
        return $this->errors;
    }

    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }
}
