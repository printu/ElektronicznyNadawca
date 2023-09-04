<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaListowaZadeklarowanaWartoscType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaListowaZadeklarowanaWartoscType extends PrzesylkaRejestrowanaType
{
    /**
     * The kategoria
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $kategoria;
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $gabaryt;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $wartosc = null;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - default: 0
     * - maxInclusive: 9
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $iloscPotwierdzenOdbioru = null;
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
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for przesylkaListowaZadeklarowanaWartoscType
     * @uses PrzesylkaListowaZadeklarowanaWartoscType::setKategoria()
     * @uses PrzesylkaListowaZadeklarowanaWartoscType::setGabaryt()
     * @uses PrzesylkaListowaZadeklarowanaWartoscType::setPosteRestante()
     * @uses PrzesylkaListowaZadeklarowanaWartoscType::setWartosc()
     * @uses PrzesylkaListowaZadeklarowanaWartoscType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaListowaZadeklarowanaWartoscType::setMasa()
     * @uses PrzesylkaListowaZadeklarowanaWartoscType::setNumerPrzesylkiKlienta()
     * @param string $kategoria
     * @param string $gabaryt
     * @param bool $posteRestante
     * @param int $wartosc
     * @param int $iloscPotwierdzenOdbioru
     * @param int $masa
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(string $kategoria, string $gabaryt, ?bool $posteRestante = false, ?int $wartosc = null, ?int $iloscPotwierdzenOdbioru = 0, ?int $masa = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setKategoria($kategoria)
            ->setGabaryt($gabaryt)
            ->setPosteRestante($posteRestante)
            ->setWartosc($wartosc)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setMasa($masa)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }
    /**
     * Get kategoria value
     * @return string
     */
    public function getKategoria(): string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @uses \PocztaPolska\EnumType\KategoriaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\KategoriaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kategoria
     * @return \PocztaPolska\StructType\PrzesylkaListowaZadeklarowanaWartoscType
     */
    public function setKategoria(string $kategoria): self
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
     * @return string
     */
    public function getGabaryt(): string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @uses \PocztaPolska\EnumType\GabarytType::valueIsValid()
     * @uses \PocztaPolska\EnumType\GabarytType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gabaryt
     * @return \PocztaPolska\StructType\PrzesylkaListowaZadeklarowanaWartoscType
     */
    public function setGabaryt(string $gabaryt): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \PocztaPolska\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;
        
        return $this;
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
     * @return \PocztaPolska\StructType\PrzesylkaListowaZadeklarowanaWartoscType
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
     * Get wartosc value
     * @return int|null
     */
    public function getWartosc(): ?int
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param int $wartosc
     * @return \PocztaPolska\StructType\PrzesylkaListowaZadeklarowanaWartoscType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($wartosc) && $wartosc > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($wartosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($wartosc) && $wartosc < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($wartosc, true)), __LINE__);
        }
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get iloscPotwierdzenOdbioru value
     * @return int|null
     */
    public function getIloscPotwierdzenOdbioru(): ?int
    {
        return $this->iloscPotwierdzenOdbioru;
    }
    /**
     * Set iloscPotwierdzenOdbioru value
     * @param int $iloscPotwierdzenOdbioru
     * @return \PocztaPolska\StructType\PrzesylkaListowaZadeklarowanaWartoscType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = 0): self
    {
        // validation for constraint: int
        if (!is_null($iloscPotwierdzenOdbioru) && !(is_int($iloscPotwierdzenOdbioru) || ctype_digit($iloscPotwierdzenOdbioru))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPotwierdzenOdbioru, true), gettype($iloscPotwierdzenOdbioru)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru > 9) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
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
     * @return \PocztaPolska\StructType\PrzesylkaListowaZadeklarowanaWartoscType
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
     * Get numerPrzesylkiKlienta value
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta(): ?string
    {
        return $this->numerPrzesylkiKlienta;
    }
    /**
     * Set numerPrzesylkiKlienta value
     * @param string $numerPrzesylkiKlienta
     * @return \PocztaPolska\StructType\PrzesylkaListowaZadeklarowanaWartoscType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
}
