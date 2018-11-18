<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CompanyAutoEntreprise.
 *
 * @ORM\Entity()
 */
class CompanyAutoEntreprise extends Company
{
    const TAX_PERCENT = 0.25;

    public function getTaxPercent(): float
    {
        return self::TAX_PERCENT;
    }
}
