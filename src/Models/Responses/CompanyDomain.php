<?php

namespace Mepost\Models\Responses;

class CompanyDomain
{
    /**
     * @var string
     */
    private $awsRegion;

    /**
     * @var bool
     */
    private $awsVerified;

    /**
     * @var Company
     */
    private $company;

    /**
     * @var int
     */
    private $companyId;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $dkimContent;

    /**
     * @var string
     */
    private $dkimName;

    /**
     * @var string
     */
    private $dkimPrivateKey;

    /**
     * @var string
     */
    private $dkimSelector;

    /**
     * @var bool
     */
    private $dkimVerified;

    /**
     * @var string
     */
    private $dmarcContent;

    /**
     * @var string
     */
    private $dmarcName;

    /**
     * @var bool
     */
    private $dmarcVerified;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var bool
     */
    private $hasAwsIdentity;

    /**
     * @var bool
     */
    private $isVerified;

    /**
     * @var string
     */
    private $spfContent;

    /**
     * @var string
     */
    private $spfName;

    /**
     * @var bool
     */
    private $spfVerified;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $uuid;

    // Getter and Setter methods

    public function getAwsRegion(): string
    {
        return $this->awsRegion;
    }

    public function setAwsRegion(string $awsRegion): self
    {
        $this->awsRegion = $awsRegion;
        return $this;
    }

    public function getAwsVerified(): bool
    {
        return $this->awsVerified;
    }

    public function setAwsVerified(bool $awsVerified): self
    {
        $this->awsVerified = $awsVerified;
        return $this;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function getCompanyId(): int
    {
        return $this->companyId;
    }

    public function setCompanyId(int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getDkimContent(): string
    {
        return $this->dkimContent;
    }

    public function setDkimContent(string $dkimContent): self
    {
        $this->dkimContent = $dkimContent;
        return $this;
    }

    public function getDkimName(): string
    {
        return $this->dkimName;
    }

    public function setDkimName(string $dkimName): self
    {
        $this->dkimName = $dkimName;
        return $this;
    }

    public function getDkimPrivateKey(): string
    {
        return $this->dkimPrivateKey;
    }

    public function setDkimPrivateKey(string $dkimPrivateKey): self
    {
        $this->dkimPrivateKey = $dkimPrivateKey;
        return $this;
    }

    public function getDkimSelector(): string
    {
        return $this->dkimSelector;
    }

    public function setDkimSelector(string $dkimSelector): self
    {
        $this->dkimSelector = $dkimSelector;
        return $this;
    }

    public function getDkimVerified(): bool
    {
        return $this->dkimVerified;
    }

    public function setDkimVerified(bool $dkimVerified): self
    {
        $this->dkimVerified = $dkimVerified;
        return $this;
    }

    public function getDmarcContent(): string
    {
        return $this->dmarcContent;
    }

    public function setDmarcContent(string $dmarcContent): self
    {
        $this->dmarcContent = $dmarcContent;
        return $this;
    }

    public function getDmarcName(): string
    {
        return $this->dmarcName;
    }

    public function setDmarcName(string $dmarcName): self
    {
        $this->dmarcName = $dmarcName;
        return $this;
    }

    public function getDmarcVerified(): bool
    {
        return $this->dmarcVerified;
    }

    public function setDmarcVerified(bool $dmarcVerified): self
    {
        $this->dmarcVerified = $dmarcVerified;
        return $this;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;
        return $this;
    }

    public function getHasAwsIdentity(): bool
    {
        return $this->hasAwsIdentity;
    }

    public function setHasAwsIdentity(bool $hasAwsIdentity): self
    {
        $this->hasAwsIdentity = $hasAwsIdentity;
        return $this;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    public function getSpfContent(): string
    {
        return $this->spfContent;
    }

    public function setSpfContent(string $spfContent): self
    {
        $this->spfContent = $spfContent;
        return $this;
    }

    public function getSpfName(): string
    {
        return $this->spfName;
    }

    public function setSpfName(string $spfName): self
    {
        $this->spfName = $spfName;
        return $this;
    }

    public function getSpfVerified(): bool
    {
        return $this->spfVerified;
    }

    public function setSpfVerified(bool $spfVerified): self
    {
        $this->spfVerified = $spfVerified;
        return $this;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;
        return $this;
    }
}
