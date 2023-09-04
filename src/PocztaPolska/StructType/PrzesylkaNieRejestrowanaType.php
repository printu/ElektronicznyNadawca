<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaNieRejestrowanaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class PrzesylkaNieRejestrowanaType extends PrzesylkaType
{
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $ilosc = null;
    /**
     * Constructor method for przesylkaNieRejestrowanaType
     * @uses PrzesylkaNieRejestrowanaType::setIlosc()
     * @param int $ilosc
     */
    public function __construct(?int $ilosc = null)
    {
        $this
            ->setIlosc($ilosc);
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
     * @return \PocztaPolska\StructType\PrzesylkaNieRejestrowanaType
     */
    public function setIlosc(?int $ilosc = null): self
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($ilosc) && $ilosc > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($ilosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($ilosc) && $ilosc < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($ilosc, true)), __LINE__);
        }
        $this->ilosc = $ilosc;
        
        return $this;
    }
}
