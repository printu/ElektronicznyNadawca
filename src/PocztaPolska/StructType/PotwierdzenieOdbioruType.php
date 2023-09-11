<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieOdbioruType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieOdbioruType extends AbstractStructBase
{
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $ilosc = null;
    /**
     * The sposob
     * @var string|null
     */
    protected ?string $sposob = null;

    /**
     * Constructor method for potwierdzenieOdbioruType
     * @uses PotwierdzenieOdbioruType::setIlosc()
     * @uses PotwierdzenieOdbioruType::setSposob()
     * @param int $ilosc
     * @param string $sposob
     */
    public function __construct(?int $ilosc = null, ?string $sposob = null)
    {
        $this
            ->setIlosc($ilosc)
            ->setSposob($sposob);
    }

    /**
     * Get ilosc value
     * @return int|null
     */
    public function getIlosc(): ?int
    {
        return $this->ilosc;
    }

    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \PocztaPolska\StructType\PotwierdzenieOdbioruType
     */
    public function setIlosc(?int $ilosc = null): self
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($ilosc) && $ilosc > 9) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($ilosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($ilosc) && $ilosc < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($ilosc, true)), __LINE__);
        }
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Get sposob value
     * @return string|null
     */
    public function getSposob(): ?string
    {
        return $this->sposob;
    }

    /**
     * Set sposob value
     * @uses \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType::valueIsValid()
     * @uses \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sposob
     * @return \PocztaPolska\StructType\PotwierdzenieOdbioruType
     */
    public function setSposob(?string $sposob = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType::valueIsValid($sposob)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType', is_array($sposob) ? implode(', ', $sposob) : var_export($sposob, true), implode(', ', \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType::getValidValues())), __LINE__);
        }
        $this->sposob = $sposob;

        return $this;
    }
}
