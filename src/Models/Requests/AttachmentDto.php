<?php

namespace Mepost\Models\Requests;

class AttachmentDto
{
    /**
     * @var string
     */
    private $base64Content;

    /**
     * @var string
     */
    private $fileName;

    // Getter and Setter methods

    public function getBase64Content(): string
    {
        return $this->base64Content;
    }

    public function setBase64Content(string $base64Content): self
    {
        $this->base64Content = $base64Content;
        return $this;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }
}
