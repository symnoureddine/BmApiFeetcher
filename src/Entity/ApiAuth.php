<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ApiAuthRepository")
 */
class ApiAuth
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soapHash;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soapToken;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSoapHash(): ?string
    {
        return $this->soapHash;
    }

    public function setSoapHash(string $soapHash): self
    {
        $this->soapHash = $soapHash;

        return $this;
    }

    public function getSoapToken(): ?string
    {
        return $this->soapToken;
    }

    public function setSoapToken(string $soapToken): self
    {
        $this->soapToken = $soapToken;

        return $this;
    }
}
