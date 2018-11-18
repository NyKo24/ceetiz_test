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
    const TAX_PERCENT = 0.33;

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

    public function getTaxPercent(): float
    {
        return self::TAX_PERCENT;
    }
}
