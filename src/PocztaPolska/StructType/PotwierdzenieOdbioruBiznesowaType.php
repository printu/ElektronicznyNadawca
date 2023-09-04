<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieOdbioruBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieOdbioruBiznesowaType extends AbstractStructBase
{
    /**
     * The sposob
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $sposob;
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ilosc = null;

    /**
     * Constructor method for potwierdzenieOdbioruBiznesowaType
     * @uses PotwierdzenieOdbioruBiznesowaType::setSposob()
     * @uses PotwierdzenieOdbioruBiznesowaType::setIlosc()
     * @param string $sposob
     * @param int $ilosc
     */
    public function __construct(string $sposob, ?int $ilosc = null)
    {
        $this
            ->setSposob($sposob)
            ->setIlosc($ilosc);
    }

    /**
     * Get sposob value
     * @return string
     */
    public function getSposob(): string
    {
        return $this->sposob;
    }

    /**
     * Set sposob value
     * @uses \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaBiznesowaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaBiznesowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sposob
     * @return \PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType
     */
    public function setSposob(string $sposob): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaBiznesowaType::valueIsValid($sposob)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaBiznesowaType', is_array($sposob) ? implode(', ', $sposob) : var_export($sposob, true), implode(', ', \PocztaPolska\EnumType\SposobPrzekazaniaPotwierdzeniaBiznesowaType::getValidValues())), __LINE__);
        }
        $this->sposob = $sposob;

        return $this;
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
     * @return \PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType
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
}
