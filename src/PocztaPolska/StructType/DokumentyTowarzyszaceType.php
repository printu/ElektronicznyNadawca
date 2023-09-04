<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DokumentyTowarzyszaceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DokumentyTowarzyszaceType extends AbstractStructBase
{
    /**
     * The rodzaj
     * @var string|null
     */
    protected ?string $rodzaj = null;
    /**
     * The numer
     * @var string|null
     */
    protected ?string $numer = null;

    /**
     * Constructor method for DokumentyTowarzyszaceType
     * @uses DokumentyTowarzyszaceType::setRodzaj()
     * @uses DokumentyTowarzyszaceType::setNumer()
     * @param string $rodzaj
     * @param string $numer
     */
    public function __construct(?string $rodzaj = null, ?string $numer = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setNumer($numer);
    }

    /**
     * Get rodzaj value
     * @return string|null
     */
    public function getRodzaj(): ?string
    {
        return $this->rodzaj;
    }

    /**
     * Set rodzaj value
     * @uses \PocztaPolska\EnumType\DokumentTowarzyszacyRodzajEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\DokumentTowarzyszacyRodzajEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzaj
     * @return \PocztaPolska\StructType\DokumentyTowarzyszaceType
     */
    public function setRodzaj(?string $rodzaj = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\DokumentTowarzyszacyRodzajEnum::valueIsValid($rodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\DokumentTowarzyszacyRodzajEnum', is_array($rodzaj) ? implode(', ', $rodzaj) : var_export($rodzaj, true), implode(', ', \PocztaPolska\EnumType\DokumentTowarzyszacyRodzajEnum::getValidValues())), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get numer value
     * @return string|null
     */
    public function getNumer(): ?string
    {
        return $this->numer;
    }

    /**
     * Set numer value
     * @param string $numer
     * @return \PocztaPolska\StructType\DokumentyTowarzyszaceType
     */
    public function setNumer(?string $numer = null): self
    {
        // validation for constraint: string
        if (!is_null($numer) && !is_string($numer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numer, true), gettype($numer)), __LINE__);
        }
        $this->numer = $numer;

        return $this;
    }
}
