<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ubezpieczenieType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UbezpieczenieType extends AbstractStructBase
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $rodzaj;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - use: required
     * @var float
     */
    protected float $kwota;
    /**
     * The akceptacjaOWU
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $akceptacjaOWU = null;

    /**
     * Constructor method for ubezpieczenieType
     * @uses UbezpieczenieType::setRodzaj()
     * @uses UbezpieczenieType::setKwota()
     * @uses UbezpieczenieType::setAkceptacjaOWU()
     * @param string $rodzaj
     * @param float $kwota
     * @param bool $akceptacjaOWU
     */
    public function __construct(string $rodzaj, float $kwota, ?bool $akceptacjaOWU = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setKwota($kwota)
            ->setAkceptacjaOWU($akceptacjaOWU);
    }

    /**
     * Get rodzaj value
     * @return string
     */
    public function getRodzaj(): string
    {
        return $this->rodzaj;
    }

    /**
     * Set rodzaj value
     * @param string $rodzaj
     * @return \PocztaPolska\StructType\UbezpieczenieType
     */
    public function setRodzaj(string $rodzaj): self
    {
        // validation for constraint: string
        if (!is_null($rodzaj) && !is_string($rodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rodzaj, true), gettype($rodzaj)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($rodzaj) && mb_strlen((string) $rodzaj) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $rodzaj)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($rodzaj) && mb_strlen((string) $rodzaj) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $rodzaj)), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get kwota value
     * @return float
     */
    public function getKwota(): float
    {
        return $this->kwota;
    }

    /**
     * Set kwota value
     * @param float $kwota
     * @return \PocztaPolska\StructType\UbezpieczenieType
     */
    public function setKwota(float $kwota): self
    {
        // validation for constraint: float
        if (!is_null($kwota) && !(is_float($kwota) || is_numeric($kwota))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($kwota, true), gettype($kwota)), __LINE__);
        }
        $this->kwota = $kwota;

        return $this;
    }

    /**
     * Get akceptacjaOWU value
     * @return bool|null
     */
    public function getAkceptacjaOWU(): ?bool
    {
        return $this->akceptacjaOWU;
    }

    /**
     * Set akceptacjaOWU value
     * @param bool $akceptacjaOWU
     * @return \PocztaPolska\StructType\UbezpieczenieType
     */
    public function setAkceptacjaOWU(?bool $akceptacjaOWU = null): self
    {
        // validation for constraint: boolean
        if (!is_null($akceptacjaOWU) && !is_bool($akceptacjaOWU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($akceptacjaOWU, true), gettype($akceptacjaOWU)), __LINE__);
        }
        $this->akceptacjaOWU = $akceptacjaOWU;

        return $this;
    }
}
