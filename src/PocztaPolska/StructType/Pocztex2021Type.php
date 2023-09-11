<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for pocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class Pocztex2021Type extends PrzesylkaRejestrowanaType
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
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PotwierdzenieEDoreczeniaType|null
     */
    protected ?\PocztaPolska\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type|null
     */
    protected ?\PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\UbezpieczenieType|null
     */
    protected ?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null;
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
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zwrotDokumentow = null;
    /**
     * The idDokumentyZwrotneAdresy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idDokumentyZwrotneAdresy = null;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\EPOType|null
     */
    protected ?\PocztaPolska\StructType\EPOType $epo = null;
    /**
     * The adresDlaZwrotu
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AdresType|null
     */
    protected ?\PocztaPolska\StructType\AdresType $adresDlaZwrotu = null;
    /**
     * The odbiorWSobote
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $odbiorWSobote = null;
    /**
     * The zasadySpecjalne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zasadySpecjalne = null;
    /**
     * The zawartosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ZawartoscPocztex2021Type|null
     */
    protected ?\PocztaPolska\StructType\ZawartoscPocztex2021Type $zawartosc = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * The uiszczaOplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $uiszczaOplate = null;
    /**
     * The doreczenieDoRakWlasnych
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $doreczenieDoRakWlasnych = null;

    /**
     * Constructor method for pocztex2021Type
     * @uses Pocztex2021Type::setPobranie()
     * @uses Pocztex2021Type::setPotwierdzenieDoreczenia()
     * @uses Pocztex2021Type::setPotwierdzenieOdbioru()
     * @uses Pocztex2021Type::setUbezpieczenie()
     * @uses Pocztex2021Type::setMasa()
     * @uses Pocztex2021Type::setWartosc()
     * @uses Pocztex2021Type::setOstroznie()
     * @uses Pocztex2021Type::setPonadgabaryt()
     * @uses Pocztex2021Type::setFormat()
     * @uses Pocztex2021Type::setNumerPrzesylkiKlienta()
     * @uses Pocztex2021Type::setZwrotDokumentow()
     * @uses Pocztex2021Type::setIdDokumentyZwrotneAdresy()
     * @uses Pocztex2021Type::setEpo()
     * @uses Pocztex2021Type::setAdresDlaZwrotu()
     * @uses Pocztex2021Type::setOdbiorWSobote()
     * @uses Pocztex2021Type::setZasadySpecjalne()
     * @uses Pocztex2021Type::setZawartosc()
     * @uses Pocztex2021Type::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses Pocztex2021Type::setUiszczaOplate()
     * @uses Pocztex2021Type::setDoreczenieDoRakWlasnych()
     * @param \PocztaPolska\StructType\PobranieType $pobranie
     * @param \PocztaPolska\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     * @param \PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     * @param \PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie
     * @param int $masa
     * @param int $wartosc
     * @param bool $ostroznie
     * @param bool $ponadgabaryt
     * @param string $format
     * @param string $numerPrzesylkiKlienta
     * @param string $zwrotDokumentow
     * @param int $idDokumentyZwrotneAdresy
     * @param \PocztaPolska\StructType\EPOType $epo
     * @param \PocztaPolska\StructType\AdresType $adresDlaZwrotu
     * @param bool $odbiorWSobote
     * @param string $zasadySpecjalne
     * @param \PocztaPolska\StructType\ZawartoscPocztex2021Type $zawartosc
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param string $uiszczaOplate
     * @param bool $doreczenieDoRakWlasnych
     */
    public function __construct(?\PocztaPolska\StructType\PobranieType $pobranie = null, ?\PocztaPolska\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia = null, ?\PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru = null, ?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null, ?int $masa = null, ?int $wartosc = null, ?bool $ostroznie = null, ?bool $ponadgabaryt = null, ?string $format = null, ?string $numerPrzesylkiKlienta = null, ?string $zwrotDokumentow = null, ?int $idDokumentyZwrotneAdresy = null, ?\PocztaPolska\StructType\EPOType $epo = null, ?\PocztaPolska\StructType\AdresType $adresDlaZwrotu = null, ?bool $odbiorWSobote = null, ?string $zasadySpecjalne = null, ?\PocztaPolska\StructType\ZawartoscPocztex2021Type $zawartosc = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, ?string $uiszczaOplate = null, ?bool $doreczenieDoRakWlasnych = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setUbezpieczenie($ubezpieczenie)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setPonadgabaryt($ponadgabaryt)
            ->setFormat($format)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
            ->setEpo($epo)
            ->setAdresDlaZwrotu($adresDlaZwrotu)
            ->setOdbiorWSobote($odbiorWSobote)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setZawartosc($zawartosc)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setUiszczaOplate($uiszczaOplate)
            ->setDoreczenieDoRakWlasnych($doreczenieDoRakWlasnych);
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
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setPobranie(?\PocztaPolska\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Get potwierdzenieDoreczenia value
     * @return \PocztaPolska\StructType\PotwierdzenieEDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\PocztaPolska\StructType\PotwierdzenieEDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Set potwierdzenieDoreczenia value
     * @param \PocztaPolska\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setPotwierdzenieDoreczenia(?\PocztaPolska\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

        return $this;
    }

    /**
     * Get potwierdzenieOdbioru value
     * @return \PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type|null
     */
    public function getPotwierdzenieOdbioru(): ?\PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Set potwierdzenieOdbioru value
     * @param \PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setPotwierdzenieOdbioru(?\PocztaPolska\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru = null): self
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;

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
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setUbezpieczenie(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;

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
     * @return \PocztaPolska\StructType\Pocztex2021Type
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
     * @return \PocztaPolska\StructType\Pocztex2021Type
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
     * @return \PocztaPolska\StructType\Pocztex2021Type
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
     * @return \PocztaPolska\StructType\Pocztex2021Type
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
     * @return \PocztaPolska\StructType\Pocztex2021Type
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
     * @return \PocztaPolska\StructType\Pocztex2021Type
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

    /**
     * Get zwrotDokumentow value
     * @return string|null
     */
    public function getZwrotDokumentow(): ?string
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Set zwrotDokumentow value
     * @uses \PocztaPolska\EnumType\ZwrotDokumentowPocztex2021Enum::valueIsValid()
     * @uses \PocztaPolska\EnumType\ZwrotDokumentowPocztex2021Enum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $zwrotDokumentow
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setZwrotDokumentow(?string $zwrotDokumentow = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\ZwrotDokumentowPocztex2021Enum::valueIsValid($zwrotDokumentow)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\ZwrotDokumentowPocztex2021Enum', is_array($zwrotDokumentow) ? implode(', ', $zwrotDokumentow) : var_export($zwrotDokumentow, true), implode(', ', \PocztaPolska\EnumType\ZwrotDokumentowPocztex2021Enum::getValidValues())), __LINE__);
        }
        $this->zwrotDokumentow = $zwrotDokumentow;

        return $this;
    }

    /**
     * Get idDokumentyZwrotneAdresy value
     * @return int|null
     */
    public function getIdDokumentyZwrotneAdresy(): ?int
    {
        return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * Set idDokumentyZwrotneAdresy value
     * @param int $idDokumentyZwrotneAdresy
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy = null): self
    {
        // validation for constraint: int
        if (!is_null($idDokumentyZwrotneAdresy) && !(is_int($idDokumentyZwrotneAdresy) || ctype_digit($idDokumentyZwrotneAdresy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idDokumentyZwrotneAdresy, true), gettype($idDokumentyZwrotneAdresy)), __LINE__);
        }
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;

        return $this;
    }

    /**
     * Get epo value
     * @return \PocztaPolska\StructType\EPOType|null
     */
    public function getEpo(): ?\PocztaPolska\StructType\EPOType
    {
        return $this->epo;
    }

    /**
     * Set epo value
     * @param \PocztaPolska\StructType\EPOType $epo
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setEpo(?\PocztaPolska\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;

        return $this;
    }

    /**
     * Get adresDlaZwrotu value
     * @return \PocztaPolska\StructType\AdresType|null
     */
    public function getAdresDlaZwrotu(): ?\PocztaPolska\StructType\AdresType
    {
        return $this->adresDlaZwrotu;
    }

    /**
     * Set adresDlaZwrotu value
     * @param \PocztaPolska\StructType\AdresType $adresDlaZwrotu
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setAdresDlaZwrotu(?\PocztaPolska\StructType\AdresType $adresDlaZwrotu = null): self
    {
        $this->adresDlaZwrotu = $adresDlaZwrotu;

        return $this;
    }

    /**
     * Get odbiorWSobote value
     * @return bool|null
     */
    public function getOdbiorWSobote(): ?bool
    {
        return $this->odbiorWSobote;
    }

    /**
     * Set odbiorWSobote value
     * @param bool $odbiorWSobote
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setOdbiorWSobote(?bool $odbiorWSobote = null): self
    {
        // validation for constraint: boolean
        if (!is_null($odbiorWSobote) && !is_bool($odbiorWSobote)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($odbiorWSobote, true), gettype($odbiorWSobote)), __LINE__);
        }
        $this->odbiorWSobote = $odbiorWSobote;

        return $this;
    }

    /**
     * Get zasadySpecjalne value
     * @return string|null
     */
    public function getZasadySpecjalne(): ?string
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Set zasadySpecjalne value
     * @uses \PocztaPolska\EnumType\ZasadySpecjalneEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\ZasadySpecjalneEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $zasadySpecjalne
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setZasadySpecjalne(?string $zasadySpecjalne = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\ZasadySpecjalneEnum::valueIsValid($zasadySpecjalne)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\ZasadySpecjalneEnum', is_array($zasadySpecjalne) ? implode(', ', $zasadySpecjalne) : var_export($zasadySpecjalne, true), implode(', ', \PocztaPolska\EnumType\ZasadySpecjalneEnum::getValidValues())), __LINE__);
        }
        $this->zasadySpecjalne = $zasadySpecjalne;

        return $this;
    }

    /**
     * Get zawartosc value
     * @return \PocztaPolska\StructType\ZawartoscPocztex2021Type|null
     */
    public function getZawartosc(): ?\PocztaPolska\StructType\ZawartoscPocztex2021Type
    {
        return $this->zawartosc;
    }

    /**
     * Set zawartosc value
     * @param \PocztaPolska\StructType\ZawartoscPocztex2021Type $zawartosc
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setZawartosc(?\PocztaPolska\StructType\ZawartoscPocztex2021Type $zawartosc = null): self
    {
        $this->zawartosc = $zawartosc;

        return $this;
    }

    /**
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(): ?bool
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) && !is_bool($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, true), gettype($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)), __LINE__);
        }
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

        return $this;
    }

    /**
     * Get uiszczaOplate value
     * @return string|null
     */
    public function getUiszczaOplate(): ?string
    {
        return $this->uiszczaOplate;
    }

    /**
     * Set uiszczaOplate value
     * @uses \PocztaPolska\EnumType\UiszczaOplateType::valueIsValid()
     * @uses \PocztaPolska\EnumType\UiszczaOplateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uiszczaOplate
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setUiszczaOplate(?string $uiszczaOplate = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\UiszczaOplateType::valueIsValid($uiszczaOplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\UiszczaOplateType', is_array($uiszczaOplate) ? implode(', ', $uiszczaOplate) : var_export($uiszczaOplate, true), implode(', ', \PocztaPolska\EnumType\UiszczaOplateType::getValidValues())), __LINE__);
        }
        $this->uiszczaOplate = $uiszczaOplate;

        return $this;
    }

    /**
     * Get doreczenieDoRakWlasnych value
     * @return bool|null
     */
    public function getDoreczenieDoRakWlasnych(): ?bool
    {
        return $this->doreczenieDoRakWlasnych;
    }

    /**
     * Set doreczenieDoRakWlasnych value
     * @param bool $doreczenieDoRakWlasnych
     * @return \PocztaPolska\StructType\Pocztex2021Type
     */
    public function setDoreczenieDoRakWlasnych(?bool $doreczenieDoRakWlasnych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($doreczenieDoRakWlasnych) && !is_bool($doreczenieDoRakWlasnych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doreczenieDoRakWlasnych, true), gettype($doreczenieDoRakWlasnych)), __LINE__);
        }
        $this->doreczenieDoRakWlasnych = $doreczenieDoRakWlasnych;

        return $this;
    }
}
