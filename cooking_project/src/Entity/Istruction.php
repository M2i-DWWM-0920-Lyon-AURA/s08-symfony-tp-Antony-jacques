<?php

namespace App\Entity;

use App\Repository\IstructionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IstructionRepository::class)
 */
class Istruction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $instructionRank;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getInstructionRank(): ?int
    {
        return $this->instructionRank;
    }

    public function setInstructionRank(int $instructionRank): self
    {
        $this->instructionRank = $instructionRank;

        return $this;
    }
}
