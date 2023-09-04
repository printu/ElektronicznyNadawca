<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for przesylkaPoleconaZagranicznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaPoleconaZagranicznaType extends PrzesylkaRejestrowanaType
{
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DeklaracjaCelna2Type|null
     */
    protected ?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The zawartosc
     * Meta information extracted from the WSDL
     * - documentation: Element określający zawartość przesyłki. Aktualnie dopuszczalne wartości: KORESPONDENCJA DOKUMENTY_PONIZEJ_250G DOKUMENTY_POWYZEJ_250G TOWARY
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zawartosc = null;
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
     * @var int|null
     */
    protected ?int $masa = null;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $iloscPotwierdzenOdbioru = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;

    /**
     * Constructor method for przesylkaPoleconaZagranicznaType
     * @uses PrzesylkaPoleconaZagranicznaType::setDeklaracjaCelna2()
     * @uses PrzesylkaPoleconaZagranicznaType::setZawartosc()
     * @uses PrzesylkaPoleconaZagranicznaType::setPosteRestante()
     * @uses PrzesylkaPoleconaZagranicznaType::setMasa()
     * @uses PrzesylkaPoleconaZagranicznaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaPoleconaZagranicznaType::setNumerPrzesylkiKlienta()
     * @param \PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $zawartosc
     * @param bool $posteRestante
     * @param int $masa
     * @param int $iloscPotwierdzenOdbioru
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $zawartosc = null, ?bool $posteRestante = false, ?int $masa = null, ?int $iloscPotwierdzenOdbioru = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setZawartosc($zawartosc)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
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
     * @return \PocztaPolska\StructType\PrzesylkaPoleconaZagranicznaType
     */
    public function setDeklaracjaCelna2(?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

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
     * @return \PocztaPolska\StructType\PrzesylkaPoleconaZagranicznaType
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
     * @return \PocztaPolska\StructType\PrzesylkaPoleconaZagranicznaType
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
     * @return \PocztaPolska\StructType\PrzesylkaPoleconaZagranicznaType
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
     * @return \PocztaPolska\StructType\PrzesylkaPoleconaZagranicznaType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = null): self
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
     * @return \PocztaPolska\StructType\PrzesylkaPoleconaZagranicznaType
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
