<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Company.
 */
abstract class Company
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $siret;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $denomination;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSiret(): string
    {
        return $this->siret;
    }

    /**
     * @param string $siret
     */
    public function setSiret(string $siret): void
    {
        $this->siret = $siret;
    }

    /**
     * @return string
     */
    public function getDenomination(): string
    {
        return $this->denomination;
    }

    /**
     * @param string $denomination
     */
    public function setDenomination(string $denomination): void
    {
        $this->denomination = $denomination;
    }
}
