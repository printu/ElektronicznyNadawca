<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for paczkaZagranicznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaczkaZagranicznaType extends PrzesylkaRejestrowanaType
{
    /**
     * The zwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ZwrotType|null
     */
    protected ?\PocztaPolska\StructType\ZwrotType $zwrot = null;
    /**
     * The deklaracjaCelna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DeklaracjaCelnaType|null
     */
    protected ?\PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna = null;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DeklaracjaCelna2Type|null
     */
    protected ?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The sposobNadaniaInterconnect
     * Meta information extracted from the WSDL
     * - documentation: Umożliwia określenie sposobu nadania przesyłki w ramach systemu Interconnect. Obsługiwane wartości: - ODBIOR_Z_ADRESU_PRYWATNEGO - ODBIOR_Z_ADRESU_FIRMOWEGO - NADANIE_W_PLACOWCE_POCZTOWEJ
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sposobNadaniaInterconnect = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\SposobDoreczeniaType|null
     */
    protected ?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
    /**
     * The posteRestante
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
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
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
     * The utrudnionaManipulacja
     * @var bool|null
     */
    protected ?bool $utrudnionaManipulacja = null;
    /**
     * The ekspres
     * @var bool|null
     */
    protected ?bool $ekspres = null;
    /**
     * The numerReferencyjnyCelny
     * Meta information extracted from the WSDL
     * - documentation: atrybut przestarzały (deprecated), należy używać typu deklaracjaCelna2Type i elementu numerReferencyjnyCelny
     * @var string|null
     */
    protected ?string $numerReferencyjnyCelny = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;

    /**
     * Constructor method for paczkaZagranicznaType
     * @uses PaczkaZagranicznaType::setZwrot()
     * @uses PaczkaZagranicznaType::setDeklaracjaCelna()
     * @uses PaczkaZagranicznaType::setDeklaracjaCelna2()
     * @uses PaczkaZagranicznaType::setSposobNadaniaInterconnect()
     * @uses PaczkaZagranicznaType::setSposobDoreczenia()
     * @uses PaczkaZagranicznaType::setPosteRestante()
     * @uses PaczkaZagranicznaType::setMasa()
     * @uses PaczkaZagranicznaType::setWartosc()
     * @uses PaczkaZagranicznaType::setKategoria()
     * @uses PaczkaZagranicznaType::setIloscPotwierdzenOdbioru()
     * @uses PaczkaZagranicznaType::setUtrudnionaManipulacja()
     * @uses PaczkaZagranicznaType::setEkspres()
     * @uses PaczkaZagranicznaType::setNumerReferencyjnyCelny()
     * @uses PaczkaZagranicznaType::setNumerPrzesylkiKlienta()
     * @param \PocztaPolska\StructType\ZwrotType $zwrot
     * @param \PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @param \PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $sposobNadaniaInterconnect
     * @param \PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @param bool $posteRestante
     * @param int $masa
     * @param int $wartosc
     * @param string $kategoria
     * @param int $iloscPotwierdzenOdbioru
     * @param bool $utrudnionaManipulacja
     * @param bool $ekspres
     * @param string $numerReferencyjnyCelny
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(?\PocztaPolska\StructType\ZwrotType $zwrot = null, ?\PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna = null, ?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $sposobNadaniaInterconnect = null, ?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null, ?bool $posteRestante = null, ?int $masa = null, ?int $wartosc = null, ?string $kategoria = null, ?int $iloscPotwierdzenOdbioru = null, ?bool $utrudnionaManipulacja = null, ?bool $ekspres = null, ?string $numerReferencyjnyCelny = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setZwrot($zwrot)
            ->setDeklaracjaCelna($deklaracjaCelna)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setSposobDoreczenia($sposobDoreczenia)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setKategoria($kategoria)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setUtrudnionaManipulacja($utrudnionaManipulacja)
            ->setEkspres($ekspres)
            ->setNumerReferencyjnyCelny($numerReferencyjnyCelny)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }

    /**
     * Get zwrot value
     * @return \PocztaPolska\StructType\ZwrotType|null
     */
    public function getZwrot(): ?\PocztaPolska\StructType\ZwrotType
    {
        return $this->zwrot;
    }

    /**
     * Set zwrot value
     * @param \PocztaPolska\StructType\ZwrotType $zwrot
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
     */
    public function setZwrot(?\PocztaPolska\StructType\ZwrotType $zwrot = null): self
    {
        $this->zwrot = $zwrot;

        return $this;
    }

    /**
     * Get deklaracjaCelna value
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType|null
     */
    public function getDeklaracjaCelna(): ?\PocztaPolska\StructType\DeklaracjaCelnaType
    {
        return $this->deklaracjaCelna;
    }

    /**
     * Set deklaracjaCelna value
     * @param \PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
     */
    public function setDeklaracjaCelna(?\PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna = null): self
    {
        $this->deklaracjaCelna = $deklaracjaCelna;

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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
     */
    public function setDeklaracjaCelna2(?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }

    /**
     * Get sposobNadaniaInterconnect value
     * @return string|null
     */
    public function getSposobNadaniaInterconnect(): ?string
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * Set sposobNadaniaInterconnect value
     * @param string $sposobNadaniaInterconnect
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
     */
    public function setSposobNadaniaInterconnect(?string $sposobNadaniaInterconnect = null): self
    {
        // validation for constraint: string
        if (!is_null($sposobNadaniaInterconnect) && !is_string($sposobNadaniaInterconnect)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sposobNadaniaInterconnect, true), gettype($sposobNadaniaInterconnect)), __LINE__);
        }
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;

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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
     */
    public function setSposobDoreczenia(?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;

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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
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
     * Get utrudnionaManipulacja value
     * @return bool|null
     */
    public function getUtrudnionaManipulacja(): ?bool
    {
        return $this->utrudnionaManipulacja;
    }

    /**
     * Set utrudnionaManipulacja value
     * @param bool $utrudnionaManipulacja
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
     */
    public function setUtrudnionaManipulacja(?bool $utrudnionaManipulacja = null): self
    {
        // validation for constraint: boolean
        if (!is_null($utrudnionaManipulacja) && !is_bool($utrudnionaManipulacja)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($utrudnionaManipulacja, true), gettype($utrudnionaManipulacja)), __LINE__);
        }
        $this->utrudnionaManipulacja = $utrudnionaManipulacja;

        return $this;
    }

    /**
     * Get ekspres value
     * @return bool|null
     */
    public function getEkspres(): ?bool
    {
        return $this->ekspres;
    }

    /**
     * Set ekspres value
     * @param bool $ekspres
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
     */
    public function setEkspres(?bool $ekspres = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ekspres) && !is_bool($ekspres)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ekspres, true), gettype($ekspres)), __LINE__);
        }
        $this->ekspres = $ekspres;

        return $this;
    }

    /**
     * Get numerReferencyjnyCelny value
     * @return string|null
     */
    public function getNumerReferencyjnyCelny(): ?string
    {
        return $this->numerReferencyjnyCelny;
    }

    /**
     * Set numerReferencyjnyCelny value
     * @param string $numerReferencyjnyCelny
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
     */
    public function setNumerReferencyjnyCelny(?string $numerReferencyjnyCelny = null): self
    {
        // validation for constraint: string
        if (!is_null($numerReferencyjnyCelny) && !is_string($numerReferencyjnyCelny)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerReferencyjnyCelny, true), gettype($numerReferencyjnyCelny)), __LINE__);
        }
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;

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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaType
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
