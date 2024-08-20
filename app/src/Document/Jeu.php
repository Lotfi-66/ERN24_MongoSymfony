<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document(collection: "jeux")]
class Jeu
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: "string")]
    private string $titre;

    #[MongoDB\Field(type: "string")]
    private string $synopsys;

    #[MongoDB\Field(type: "int")]
    private int $pegi;

    #[MongoDB\Field(type: "date")]
    private \DateTime $date;

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): Jeu
    {
        $this->titre = $titre;
        return $this;
    }

    public function getSynopsys(): string
    {
        return $this->synopsys;
    }

    public function setSynopsys(string $synopsys): Jeu
    {
        $this->synopsys = $synopsys;
        return $this;
    }

    public function getPegi(): int
    {
        return $this->pegi;
    }

    public function setPegi(int $pegi): Jeu
    {
        $this->pegi = $pegi;
        return $this;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): Jeu
    {
        $this->date = $date;
        return $this;
    }

}