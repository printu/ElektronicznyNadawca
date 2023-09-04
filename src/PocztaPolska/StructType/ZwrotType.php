<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotType extends AbstractStructBase
{
    /**
     * The zwrotPoLiczbieDni
     * @var int|null
     */
    protected ?int $zwrotPoLiczbieDni = null;
    /**
     * The traktowacJakPorzucona
     * @var bool|null
     */
    protected ?bool $traktowacJakPorzucona = null;
    /**
     * The sposobZwrotu
     * @var string|null
     */
    protected ?string $sposobZwrotu = null;
    /**
     * Constructor method for zwrotType
     * @uses ZwrotType::setZwrotPoLiczbieDni()
     * @uses ZwrotType::setTraktowacJakPorzucona()
     * @uses ZwrotType::setSposobZwrotu()
     * @param int $zwrotPoLiczbieDni
     * @param bool $traktowacJakPorzucona
     * @param string $sposobZwrotu
     */
    public function __construct(?int $zwrotPoLiczbieDni = null, ?bool $traktowacJakPorzucona = null, ?string $sposobZwrotu = null)
    {
        $this
            ->setZwrotPoLiczbieDni($zwrotPoLiczbieDni)
            ->setTraktowacJakPorzucona($traktowacJakPorzucona)
            ->setSposobZwrotu($sposobZwrotu);
    }
    /**
     * Get zwrotPoLiczbieDni value
     * @return int|null
     */
    public function getZwrotPoLiczbieDni(): ?int
    {
        return $this->zwrotPoLiczbieDni;
    }
    /**
     * Set zwrotPoLiczbieDni value
     * @param int $zwrotPoLiczbieDni
     * @return \PocztaPolska\StructType\ZwrotType
     */
    public function setZwrotPoLiczbieDni(?int $zwrotPoLiczbieDni = null): self
    {
        // validation for constraint: int
        if (!is_null($zwrotPoLiczbieDni) && !(is_int($zwrotPoLiczbieDni) || ctype_digit($zwrotPoLiczbieDni))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($zwrotPoLiczbieDni, true), gettype($zwrotPoLiczbieDni)), __LINE__);
        }
        $this->zwrotPoLiczbieDni = $zwrotPoLiczbieDni;
        
        return $this;
    }
    /**
     * Get traktowacJakPorzucona value
     * @return bool|null
     */
    public function getTraktowacJakPorzucona(): ?bool
    {
        return $this->traktowacJakPorzucona;
    }
    /**
     * Set traktowacJakPorzucona value
     * @param bool $traktowacJakPorzucona
     * @return \PocztaPolska\StructType\ZwrotType
     */
    public function setTraktowacJakPorzucona(?bool $traktowacJakPorzucona = null): self
    {
        // validation for constraint: boolean
        if (!is_null($traktowacJakPorzucona) && !is_bool($traktowacJakPorzucona)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($traktowacJakPorzucona, true), gettype($traktowacJakPorzucona)), __LINE__);
        }
        $this->traktowacJakPorzucona = $traktowacJakPorzucona;
        
        return $this;
    }
    /**
     * Get sposobZwrotu value
     * @return string|null
     */
    public function getSposobZwrotu(): ?string
    {
        return $this->sposobZwrotu;
    }
    /**
     * Set sposobZwrotu value
     * @uses \PocztaPolska\EnumType\SposobZwrotuType::valueIsValid()
     * @uses \PocztaPolska\EnumType\SposobZwrotuType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sposobZwrotu
     * @return \PocztaPolska\StructType\ZwrotType
     */
    public function setSposobZwrotu(?string $sposobZwrotu = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\SposobZwrotuType::valueIsValid($sposobZwrotu)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\SposobZwrotuType', is_array($sposobZwrotu) ? implode(', ', $sposobZwrotu) : var_export($sposobZwrotu, true), implode(', ', \PocztaPolska\EnumType\SposobZwrotuType::getValidValues())), __LINE__);
        }
        $this->sposobZwrotu = $sposobZwrotu;
        
        return $this;
    }
}
