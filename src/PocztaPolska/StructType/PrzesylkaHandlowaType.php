<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for przesylkaHandlowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaHandlowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    protected ?int $masa = null;

    /**
     * Constructor method for przesylkaHandlowaType
     * @uses PrzesylkaHandlowaType::setPosteRestante()
     * @uses PrzesylkaHandlowaType::setMasa()
     * @param bool $posteRestante
     * @param int $masa
     */
    public function __construct(?bool $posteRestante = false, ?int $masa = null)
    {
        $this
            ->setPosteRestante($posteRestante)
            ->setMasa($masa);
    }

    /**
     * Get posteRestante value
     * @return bool|null
     */
    public function getPosteRestante(): ?bool
    {
        return $this->posteRestante;
    }

    /**
     * Set posteRestante value
     * @param bool $posteRestante
     * @return \PocztaPolska\StructType\PrzesylkaHandlowaType
     */
    public function setPosteRestante(?bool $posteRestante = false): self
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;

        return $this;
    }

    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }

    /**
     * Set masa value
     * @param int $masa
     * @return \PocztaPolska\StructType\PrzesylkaHandlowaType
     */
    public function setMasa(?int $masa = null): self
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($masa) && $masa > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($masa, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($masa) && $masa < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($masa, true)), __LINE__);
        }
        $this->masa = $masa;

        return $this;
    }
}
