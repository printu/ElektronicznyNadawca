<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ubezpieczeniaInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UbezpieczeniaInfoType extends AbstractStructBase
{
    /**
     * The typPrzesylki
     * @var string|null
     */
    protected ?string $typPrzesylki = null;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * @var float|null
     */
    protected ?float $kwota = null;

    /**
     * Constructor method for ubezpieczeniaInfoType
     * @uses UbezpieczeniaInfoType::setTypPrzesylki()
     * @uses UbezpieczeniaInfoType::setKwota()
     * @param string $typPrzesylki
     * @param float $kwota
     */
    public function __construct(?string $typPrzesylki = null, ?float $kwota = null)
    {
        $this
            ->setTypPrzesylki($typPrzesylki)
            ->setKwota($kwota);
    }

    /**
     * Get typPrzesylki value
     * @return string|null
     */
    public function getTypPrzesylki(): ?string
    {
        return $this->typPrzesylki;
    }

    /**
     * Set typPrzesylki value
     * @param string $typPrzesylki
     * @return \PocztaPolska\StructType\UbezpieczeniaInfoType
     */
    public function setTypPrzesylki(?string $typPrzesylki = null): self
    {
        // validation for constraint: string
        if (!is_null($typPrzesylki) && !is_string($typPrzesylki)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typPrzesylki, true), gettype($typPrzesylki)), __LINE__);
        }
        $this->typPrzesylki = $typPrzesylki;

        return $this;
    }

    /**
     * Get kwota value
     * @return float|null
     */
    public function getKwota(): ?float
    {
        return $this->kwota;
    }

    /**
     * Set kwota value
     * @param float $kwota
     * @return \PocztaPolska\StructType\UbezpieczeniaInfoType
     */
    public function setKwota(?float $kwota = null): self
    {
        // validation for constraint: float
        if (!is_null($kwota) && !(is_float($kwota) || is_numeric($kwota))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($kwota, true), gettype($kwota)), __LINE__);
        }
        $this->kwota = $kwota;

        return $this;
    }
}
