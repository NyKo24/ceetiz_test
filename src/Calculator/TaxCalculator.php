<?php

namespace App\Calculator;

use App\Entity\CompanyTaxInterface;

class TaxCalculator
{
    public function calculateTaxOfAnnualBusinessAmount(int $annualBusinessAmount, CompanyTaxInterface $companyTax): float
    {
        return $annualBusinessAmount * $companyTax->getTaxPercent();
    }
}
