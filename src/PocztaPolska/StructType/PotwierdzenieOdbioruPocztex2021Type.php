<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieOdbioruPocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieOdbioruPocztex2021Type extends AbstractStructBase
{
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ilosc;
    /**
     * The sposobPotwierdzeniaOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $sposobPotwierdzeniaOdbioru;
    /**
     * Constructor method for potwierdzenieOdbioruPocztex2021Type
     * @uses PotwierdzenieOdbioruPocztex2021Type::setIlosc()
     * @uses PotwierdzenieOdbioruPocztex2021Type::setSposobPotwierdzeniaOdbioru()
     * @param int $ilosc
     * @param string $sposobPotwierdzeniaOdbioru
     */
    public function __construct(int $ilosc, string $sposobPotwierdzeniaOdbioru)
    {
        $this
            ->setIlosc($ilosc)
            ->setSposobPotwierdzeniaOdbioru($sposobPotwierdzeniaOdbioru);
    }
    /**
     * Get ilosc value
     * @return int
     */
    public function getIlosc(): int
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type
     */
    public function setIlosc(int $ilosc): self
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($ilosc) && $ilosc > 9) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($ilosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($ilosc) && $ilosc < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($ilosc, true)), __LINE__);
        }
        $this->ilosc = $ilosc;
        
        return $this;
    }
    /**
     * Get sposobPotwierdzeniaOdbioru value
     * @return string
     */
    public function getSposobPotwierdzeniaOdbioru(): string
    {
        return $this->sposobPotwierdzeniaOdbioru;
    }
    /**
     * Set sposobPotwierdzeniaOdbioru value
     * @uses \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum::valueIsValid()
     * @uses \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sposobPotwierdzeniaOdbioru
     * @return \PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type
     */
    public function setSposobPotwierdzeniaOdbioru(string $sposobPotwierdzeniaOdbioru): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum::valueIsValid($sposobPotwierdzeniaOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum', is_array($sposobPotwierdzeniaOdbioru) ? implode(', ', $sposobPotwierdzeniaOdbioru) : var_export($sposobPotwierdzeniaOdbioru, true), implode(', ', \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum::getValidValues())), __LINE__);
        }
        $this->sposobPotwierdzeniaOdbioru = $sposobPotwierdzeniaOdbioru;
        
        return $this;
    }
}
