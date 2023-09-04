<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for przesylkaNierejestrowanaZNumeremType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaNierejestrowanaZNumeremType extends PrzesylkaRejestrowanaType
{
    /**
     * The posteRestante
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The miejscowa
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $miejscowa = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $masa = null;
    /**
     * The obszarMiasto
     * @var bool|null
     */
    protected ?bool $obszarMiasto = null;
    /**
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
    /**
     * The gabaryt
     * @var string|null
     */
    protected ?string $gabaryt = null;
    /**
     * The serwis
     * @var string|null
     */
    protected ?string $serwis = null;

    /**
     * Constructor method for przesylkaNierejestrowanaZNumeremType
     * @uses PrzesylkaNierejestrowanaZNumeremType::setPosteRestante()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setMiejscowa()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setMasa()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setObszarMiasto()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setKategoria()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setGabaryt()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setSerwis()
     * @param bool $posteRestante
     * @param bool $miejscowa
     * @param int $masa
     * @param bool $obszarMiasto
     * @param string $kategoria
     * @param string $gabaryt
     * @param string $serwis
     */
    public function __construct(?bool $posteRestante = null, ?bool $miejscowa = false, ?int $masa = null, ?bool $obszarMiasto = null, ?string $kategoria = null, ?string $gabaryt = null, ?string $serwis = null)
    {
        $this
            ->setPosteRestante($posteRestante)
            ->setMiejscowa($miejscowa)
            ->setMasa($masa)
            ->setObszarMiasto($obszarMiasto)
            ->setKategoria($kategoria)
            ->setGabaryt($gabaryt)
            ->setSerwis($serwis);
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
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;

        return $this;
    }

    /**
     * Get miejscowa value
     * @return bool|null
     */
    public function getMiejscowa(): ?bool
    {
        return $this->miejscowa;
    }

    /**
     * Set miejscowa value
     * @param bool $miejscowa
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setMiejscowa(?bool $miejscowa = false): self
    {
        // validation for constraint: boolean
        if (!is_null($miejscowa) && !is_bool($miejscowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($miejscowa, true), gettype($miejscowa)), __LINE__);
        }
        $this->miejscowa = $miejscowa;

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
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaZNumeremType
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

    /**
     * Get obszarMiasto value
     * @return bool|null
     */
    public function getObszarMiasto(): ?bool
    {
        return $this->obszarMiasto;
    }

    /**
     * Set obszarMiasto value
     * @param bool $obszarMiasto
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setObszarMiasto(?bool $obszarMiasto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($obszarMiasto) && !is_bool($obszarMiasto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($obszarMiasto, true), gettype($obszarMiasto)), __LINE__);
        }
        $this->obszarMiasto = $obszarMiasto;

        return $this;
    }

    /**
     * Get kategoria value
     * @return string|null
     */
    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }

    /**
     * Set kategoria value
     * @uses \PocztaPolska\EnumType\KategoriaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\KategoriaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kategoria
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \PocztaPolska\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;

        return $this;
    }

    /**
     * Get gabaryt value
     * @return string|null
     */
    public function getGabaryt(): ?string
    {
        return $this->gabaryt;
    }

    /**
     * Set gabaryt value
     * @uses \PocztaPolska\EnumType\GabarytType::valueIsValid()
     * @uses \PocztaPolska\EnumType\GabarytType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gabaryt
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \PocztaPolska\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;

        return $this;
    }

    /**
     * Get serwis value
     * @return string|null
     */
    public function getSerwis(): ?string
    {
        return $this->serwis;
    }

    /**
     * Set serwis value
     * @uses \PocztaPolska\EnumType\SerwisNierejestrowanaZNumeremType::valueIsValid()
     * @uses \PocztaPolska\EnumType\SerwisNierejestrowanaZNumeremType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $serwis
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setSerwis(?string $serwis = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\SerwisNierejestrowanaZNumeremType::valueIsValid($serwis)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\SerwisNierejestrowanaZNumeremType', is_array($serwis) ? implode(', ', $serwis) : var_export($serwis, true), implode(', ', \PocztaPolska\EnumType\SerwisNierejestrowanaZNumeremType::getValidValues())), __LINE__);
        }
        $this->serwis = $serwis;

        return $this;
    }
}
