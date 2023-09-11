<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGuid StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGuid extends AbstractStructBase
{
    /**
     * The ilosc
     * @var int|null
     */
    protected ?int $ilosc = null;

    /**
     * Constructor method for getGuid
     * @uses GetGuid::setIlosc()
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
     * @return \PocztaPolska\StructType\GetGuid
     */
    public function setIlosc(?int $ilosc = null): self
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        $this->ilosc = $ilosc;

        return $this;
    }
}
