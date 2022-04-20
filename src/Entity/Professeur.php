<?php

namespace App\Entity;

use App\Repository\ProfesseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfesseurRepository::class)
 */
class Professeur extends Personne
{

    /**
     * @ORM\Column(type="integer")
     */
    private $anciennete;

    public function getAnciennete(): ?int
    {
        return $this->anciennete;
    }

    public function setAnciennete(int $anciennete): self
    {
        $this->anciennete = $anciennete;

        return $this;
    }
}
