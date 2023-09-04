<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for subPocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class SubPocztex2021Type extends PrzesylkaType
{
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PobranieType|null
     */
    protected ?\PocztaPolska\StructType\PobranieType $pobranie = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\UbezpieczenieType|null
     */
    protected ?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - maxOccurs: 1
     * - minLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerNadania = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $masa = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $wartosc = null;
    /**
     * The ostroznie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ostroznie = null;
    /**
     * The ponadgabaryt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ponadgabaryt = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;

    /**
     * Constructor method for subPocztex2021Type
     * @uses SubPocztex2021Type::setPobranie()
     * @uses SubPocztex2021Type::setUbezpieczenie()
     * @uses SubPocztex2021Type::setNumerNadania()
     * @uses SubPocztex2021Type::setMasa()
     * @uses SubPocztex2021Type::setWartosc()
     * @uses SubPocztex2021Type::setOstroznie()
     * @uses SubPocztex2021Type::setPonadgabaryt()
     * @uses SubPocztex2021Type::setFormat()
     * @uses SubPocztex2021Type::setNumerPrzesylkiKlienta()
     * @param \PocztaPolska\StructType\PobranieType $pobranie
     * @param \PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $numerNadania
     * @param int $masa
     * @param int $wartosc
     * @param bool $ostroznie
     * @param bool $ponadgabaryt
     * @param string $format
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(?\PocztaPolska\StructType\PobranieType $pobranie = null, ?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $numerNadania = null, ?int $masa = null, ?int $wartosc = null, ?bool $ostroznie = null, ?bool $ponadgabaryt = null, ?string $format = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerNadania($numerNadania)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setPonadgabaryt($ponadgabaryt)
            ->setFormat($format)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }

    /**
     * Get pobranie value
     * @return \PocztaPolska\StructType\PobranieType|null
     */
    public function getPobranie(): ?\PocztaPolska\StructType\PobranieType
    {
        return $this->pobranie;
    }

    /**
     * Set pobranie value
     * @param \PocztaPolska\StructType\PobranieType $pobranie
     * @return \PocztaPolska\StructType\SubPocztex2021Type
     */
    public function setPobranie(?\PocztaPolska\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Get ubezpieczenie value
     * @return \PocztaPolska\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie(): ?\PocztaPolska\StructType\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }

    /**
     * Set ubezpieczenie value
     * @param \PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie
     * @return \PocztaPolska\StructType\SubPocztex2021Type
     */
    public function setUbezpieczenie(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
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
     * @return \PocztaPolska\StructType\SubPocztex2021Type
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
     * @return \PocztaPolska\StructType\SubPocztex2021Type
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
     * @return \PocztaPolska\StructType\SubPocztex2021Type
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
     * Get ostroznie value
     * @return bool|null
     */
    public function getOstroznie(): ?bool
    {
        return $this->ostroznie;
    }

    /**
     * Set ostroznie value
     * @param bool $ostroznie
     * @return \PocztaPolska\StructType\SubPocztex2021Type
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ostroznie) && !is_bool($ostroznie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ostroznie, true), gettype($ostroznie)), __LINE__);
        }
        $this->ostroznie = $ostroznie;

        return $this;
    }

    /**
     * Get ponadgabaryt value
     * @return bool|null
     */
    public function getPonadgabaryt(): ?bool
    {
        return $this->ponadgabaryt;
    }

    /**
     * Set ponadgabaryt value
     * @param bool $ponadgabaryt
     * @return \PocztaPolska\StructType\SubPocztex2021Type
     */
    public function setPonadgabaryt(?bool $ponadgabaryt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ponadgabaryt) && !is_bool($ponadgabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ponadgabaryt, true), gettype($ponadgabaryt)), __LINE__);
        }
        $this->ponadgabaryt = $ponadgabaryt;

        return $this;
    }

    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * Set format value
     * @uses \PocztaPolska\EnumType\FormatPocztex2021Type::valueIsValid()
     * @uses \PocztaPolska\EnumType\FormatPocztex2021Type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $format
     * @return \PocztaPolska\StructType\SubPocztex2021Type
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\FormatPocztex2021Type::valueIsValid($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\FormatPocztex2021Type', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \PocztaPolska\EnumType\FormatPocztex2021Type::getValidValues())), __LINE__);
        }
        $this->format = $format;

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
     * @return \PocztaPolska\StructType\SubPocztex2021Type
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($numerPrzesylkiKlienta) && mb_strlen((string) $numerPrzesylkiKlienta) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $this;
    }
}
