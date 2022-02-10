<?php

namespace App\Entity;

use App\Repository\AProposRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AProposRepository::class)]
class APropos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text')]
    private $description_perso;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionPerso(): ?string
    {
        return $this->description_perso;
    }

    public function setDescriptionPerso(string $description_perso): self
    {
        $this->description_perso = $description_perso;

        return $this;
    }
}
