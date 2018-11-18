<?php

namespace App\Tests\Calculator;

use App\Calculator\TaxCalculator;
use App\Entity\CompanyTaxInterface;
use PHPUnit\Framework\TestCase;

class TaxCalculatorTest extends TestCase
{
    public function init()
    {
        return new TaxCalculator();
    }

    public function testCalculateTaxOfAnnualBusinessAmount()
    {
        $annualBusinessAmount = 100;
        $taxPercent = 0.25;

        $taxAmount = 25.0;

        $companyTaxMock = $this->createMock(CompanyTaxInterface::class);
        $companyTaxMock->expects($this->once())->method('getTaxPercent')->willReturn($taxPercent);

        $this->assertSame($taxAmount, $this->init()->calculateTaxOfAnnualBusinessAmount($annualBusinessAmount, $companyTaxMock));
    }
}
