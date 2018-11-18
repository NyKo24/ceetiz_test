<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CompanySAS.
 *
 * @ORM\Entity(s)
 */
class CompanySAS extends Company
{
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $registeredAddress;

    /**
     * @return string
     */
    public function getRegisteredAddress(): string
    {
        return $this->registeredAddress;
    }

    /**
     * @param string $registeredAddress
     */
    public function setRegisteredAddress(string $registeredAddress): void
    {
        $this->registeredAddress = $registeredAddress;
    }
}
