<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EZDOPrzesylkaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EZDOPrzesylkaType extends AbstractStructBase
{
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    protected ?string $numerNadania = null;
    /**
     * The rodzaj
     * @var string|null
     */
    protected ?string $rodzaj = null;
    /**
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
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
     * The kwotaPobrania
     * Meta information extracted from the WSDL
     * - documentation: kwota jaką należy pobrać podana w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $kwotaPobrania = null;
    /**
     * The numerWewnetrznyPrzesylki
     * @var string|null
     */
    protected ?string $numerWewnetrznyPrzesylki = null;
    /**
     * The zwrot
     * @var string|null
     */
    protected ?string $zwrot = null;
    /**
     * Constructor method for EZDOPrzesylkaType
     * @uses EZDOPrzesylkaType::setNumerNadania()
     * @uses EZDOPrzesylkaType::setRodzaj()
     * @uses EZDOPrzesylkaType::setKategoria()
     * @uses EZDOPrzesylkaType::setMasa()
     * @uses EZDOPrzesylkaType::setWartosc()
     * @uses EZDOPrzesylkaType::setKwotaPobrania()
     * @uses EZDOPrzesylkaType::setNumerWewnetrznyPrzesylki()
     * @uses EZDOPrzesylkaType::setZwrot()
     * @param string $numerNadania
     * @param string $rodzaj
     * @param string $kategoria
     * @param int $masa
     * @param int $wartosc
     * @param int $kwotaPobrania
     * @param string $numerWewnetrznyPrzesylki
     * @param string $zwrot
     */
    public function __construct(?string $numerNadania = null, ?string $rodzaj = null, ?string $kategoria = null, ?int $masa = null, ?int $wartosc = null, ?int $kwotaPobrania = null, ?string $numerWewnetrznyPrzesylki = null, ?string $zwrot = null)
    {
        $this
            ->setNumerNadania($numerNadania)
            ->setRodzaj($rodzaj)
            ->setKategoria($kategoria)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setKwotaPobrania($kwotaPobrania)
            ->setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
            ->setZwrot($zwrot);
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;
        
        return $this;
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
     * @param string $rodzaj
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType
     */
    public function setRodzaj(?string $rodzaj = null): self
    {
        // validation for constraint: string
        if (!is_null($rodzaj) && !is_string($rodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rodzaj, true), gettype($rodzaj)), __LINE__);
        }
        $this->rodzaj = $rodzaj;
        
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
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType
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
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType
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
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType
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
     * Get kwotaPobrania value
     * @return int|null
     */
    public function getKwotaPobrania(): ?int
    {
        return $this->kwotaPobrania;
    }
    /**
     * Set kwotaPobrania value
     * @param int $kwotaPobrania
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType
     */
    public function setKwotaPobrania(?int $kwotaPobrania = null): self
    {
        // validation for constraint: int
        if (!is_null($kwotaPobrania) && !(is_int($kwotaPobrania) || ctype_digit($kwotaPobrania))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kwotaPobrania, true), gettype($kwotaPobrania)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($kwotaPobrania) && $kwotaPobrania > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($kwotaPobrania, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($kwotaPobrania) && $kwotaPobrania < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($kwotaPobrania, true)), __LINE__);
        }
        $this->kwotaPobrania = $kwotaPobrania;
        
        return $this;
    }
    /**
     * Get numerWewnetrznyPrzesylki value
     * @return string|null
     */
    public function getNumerWewnetrznyPrzesylki(): ?string
    {
        return $this->numerWewnetrznyPrzesylki;
    }
    /**
     * Set numerWewnetrznyPrzesylki value
     * @param string $numerWewnetrznyPrzesylki
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType
     */
    public function setNumerWewnetrznyPrzesylki(?string $numerWewnetrznyPrzesylki = null): self
    {
        // validation for constraint: string
        if (!is_null($numerWewnetrznyPrzesylki) && !is_string($numerWewnetrznyPrzesylki)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerWewnetrznyPrzesylki, true), gettype($numerWewnetrznyPrzesylki)), __LINE__);
        }
        $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;
        
        return $this;
    }
    /**
     * Get zwrot value
     * @return string|null
     */
    public function getZwrot(): ?string
    {
        return $this->zwrot;
    }
    /**
     * Set zwrot value
     * @param string $zwrot
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType
     */
    public function setZwrot(?string $zwrot = null): self
    {
        // validation for constraint: string
        if (!is_null($zwrot) && !is_string($zwrot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwrot, true), gettype($zwrot)), __LINE__);
        }
        $this->zwrot = $zwrot;
        
        return $this;
    }
}
