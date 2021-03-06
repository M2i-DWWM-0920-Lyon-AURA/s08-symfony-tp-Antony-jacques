<?php

namespace App\Entity;

use App\Repository\InstructionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InstructionRepository::class)
 */
class Instruction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $meal_id;

    /**
     * @ORM\Column(type="string", length=1000)
     * 
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

    public function getMealId(): ?int
    {
        return $this->meal_id;
    }

    public function setMealId(int $meal_id): self
    {
        $this->meal_id = $meal_id;

        return $this;
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
