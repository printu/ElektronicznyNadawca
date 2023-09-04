<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for globalExpresType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GlobalExpresType extends PrzesylkaRejestrowanaType
{
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\UbezpieczenieType|null
     */
    protected ?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DeklaracjaCelna2Type|null
     */
    protected ?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\SposobDoreczeniaType|null
     */
    protected ?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
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
     * The posteRestante
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The zawartosc
     * Meta information extracted from the WSDL
     * - documentation: Element określający zawartość przesyłki. Aktualnie dopuszczalne wartości: KORESPONDENCJA DOKUMENTY_PONIZEJ_250G DOKUMENTY_POWYZEJ_250G TOWARY
     * @var string|null
     */
    protected ?string $zawartosc = null;
    /**
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;

    /**
     * Constructor method for globalExpresType
     * @uses GlobalExpresType::setUbezpieczenie()
     * @uses GlobalExpresType::setPotwierdzenieDoreczenia()
     * @uses GlobalExpresType::setDeklaracjaCelna2()
     * @uses GlobalExpresType::setSposobDoreczenia()
     * @uses GlobalExpresType::setMasa()
     * @uses GlobalExpresType::setPosteRestante()
     * @uses GlobalExpresType::setZawartosc()
     * @uses GlobalExpresType::setKategoria()
     * @uses GlobalExpresType::setNumerPrzesylkiKlienta()
     * @param \PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie
     * @param \PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param \PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @param int $masa
     * @param bool $posteRestante
     * @param string $zawartosc
     * @param string $kategoria
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null, ?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null, ?int $masa = null, ?bool $posteRestante = null, ?string $zawartosc = null, ?string $kategoria = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobDoreczenia($sposobDoreczenia)
            ->setMasa($masa)
            ->setPosteRestante($posteRestante)
            ->setZawartosc($zawartosc)
            ->setKategoria($kategoria)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
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
     * @return \PocztaPolska\StructType\GlobalExpresType
     */
    public function setUbezpieczenie(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
    }

    /**
     * Get potwierdzenieDoreczenia value
     * @return \PocztaPolska\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Set potwierdzenieDoreczenia value
     * @param \PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \PocztaPolska\StructType\GlobalExpresType
     */
    public function setPotwierdzenieDoreczenia(?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

        return $this;
    }

    /**
     * Get deklaracjaCelna2 value
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2(): ?\PocztaPolska\StructType\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Set deklaracjaCelna2 value
     * @param \PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return \PocztaPolska\StructType\GlobalExpresType
     */
    public function setDeklaracjaCelna2(?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }

    /**
     * Get sposobDoreczenia value
     * @return \PocztaPolska\StructType\SposobDoreczeniaType|null
     */
    public function getSposobDoreczenia(): ?\PocztaPolska\StructType\SposobDoreczeniaType
    {
        return $this->sposobDoreczenia;
    }

    /**
     * Set sposobDoreczenia value
     * @param \PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @return \PocztaPolska\StructType\GlobalExpresType
     */
    public function setSposobDoreczenia(?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;

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
     * @return \PocztaPolska\StructType\GlobalExpresType
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
     * @return \PocztaPolska\StructType\GlobalExpresType
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
     * Get zawartosc value
     * @return string|null
     */
    public function getZawartosc(): ?string
    {
        return $this->zawartosc;
    }

    /**
     * Set zawartosc value
     * @param string $zawartosc
     * @return \PocztaPolska\StructType\GlobalExpresType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;

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
     * @return \PocztaPolska\StructType\GlobalExpresType
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
     * @return \PocztaPolska\StructType\GlobalExpresType
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
