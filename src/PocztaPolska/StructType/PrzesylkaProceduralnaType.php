<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for przesylkaProceduralnaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaProceduralnaType extends PrzesylkaRejestrowanaType
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
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\EPOType|null
     */
    protected ?\PocztaPolska\StructType\EPOType $epo = null;
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    protected ?\PocztaPolska\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PobranieType|null
     */
    protected ?\PocztaPolska\StructType\PobranieType $pobranie = null;
    /**
     * The serwis
     * @var string|null
     */
    protected ?string $serwis = null;
    /**
     * The numerNadaniaPowrot1
     * @var string|null
     */
    protected ?string $numerNadaniaPowrot1 = null;
    /**
     * The numerNadaniaPowrot2
     * @var string|null
     */
    protected ?string $numerNadaniaPowrot2 = null;
    /**
     * The idPrzesylkaZawartosc
     * @var int|null
     */
    protected ?int $idPrzesylkaZawartosc = null;
    /**
     * The idListaCzynnosci
     * @var int|null
     */
    protected ?int $idListaCzynnosci = null;
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
     * The opakowanie
     * @var string|null
     */
    protected ?string $opakowanie = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
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
     * The idAdresPrzesylkaPowrot
     * @var int|null
     */
    protected ?int $idAdresPrzesylkaPowrot = null;

    /**
     * Constructor method for przesylkaProceduralnaType
     * @uses PrzesylkaProceduralnaType::setUbezpieczenie()
     * @uses PrzesylkaProceduralnaType::setEpo()
     * @uses PrzesylkaProceduralnaType::setUrzadWydaniaEPrzesylki()
     * @uses PrzesylkaProceduralnaType::setPobranie()
     * @uses PrzesylkaProceduralnaType::setSerwis()
     * @uses PrzesylkaProceduralnaType::setNumerNadaniaPowrot1()
     * @uses PrzesylkaProceduralnaType::setNumerNadaniaPowrot2()
     * @uses PrzesylkaProceduralnaType::setIdPrzesylkaZawartosc()
     * @uses PrzesylkaProceduralnaType::setIdListaCzynnosci()
     * @uses PrzesylkaProceduralnaType::setMasa()
     * @uses PrzesylkaProceduralnaType::setOpakowanie()
     * @uses PrzesylkaProceduralnaType::setNumerPrzesylkiKlienta()
     * @uses PrzesylkaProceduralnaType::setWartosc()
     * @uses PrzesylkaProceduralnaType::setIdAdresPrzesylkaPowrot()
     * @param \PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie
     * @param \PocztaPolska\StructType\EPOType $epo
     * @param \PocztaPolska\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param \PocztaPolska\StructType\PobranieType $pobranie
     * @param string $serwis
     * @param string $numerNadaniaPowrot1
     * @param string $numerNadaniaPowrot2
     * @param int $idPrzesylkaZawartosc
     * @param int $idListaCzynnosci
     * @param int $masa
     * @param string $opakowanie
     * @param string $numerPrzesylkiKlienta
     * @param int $wartosc
     * @param int $idAdresPrzesylkaPowrot
     */
    public function __construct(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null, ?\PocztaPolska\StructType\EPOType $epo = null, ?\PocztaPolska\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, ?\PocztaPolska\StructType\PobranieType $pobranie = null, ?string $serwis = null, ?string $numerNadaniaPowrot1 = null, ?string $numerNadaniaPowrot2 = null, ?int $idPrzesylkaZawartosc = null, ?int $idListaCzynnosci = null, ?int $masa = null, ?string $opakowanie = null, ?string $numerPrzesylkiKlienta = null, ?int $wartosc = null, ?int $idAdresPrzesylkaPowrot = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setEpo($epo)
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setPobranie($pobranie)
            ->setSerwis($serwis)
            ->setNumerNadaniaPowrot1($numerNadaniaPowrot1)
            ->setNumerNadaniaPowrot2($numerNadaniaPowrot2)
            ->setIdPrzesylkaZawartosc($idPrzesylkaZawartosc)
            ->setIdListaCzynnosci($idListaCzynnosci)
            ->setMasa($masa)
            ->setOpakowanie($opakowanie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setWartosc($wartosc)
            ->setIdAdresPrzesylkaPowrot($idAdresPrzesylkaPowrot);
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
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setUbezpieczenie(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;

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
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setEpo(?\PocztaPolska\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;

        return $this;
    }

    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \PocztaPolska\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public function getUrzadWydaniaEPrzesylki(): ?\PocztaPolska\StructType\UrzadWydaniaEPrzesylkiType
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * Set urzadWydaniaEPrzesylki value
     * @param \PocztaPolska\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setUrzadWydaniaEPrzesylki(?\PocztaPolska\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null): self
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;

        return $this;
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
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setPobranie(?\PocztaPolska\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;

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
     * @uses \PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $serwis
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setSerwis(?string $serwis = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType::valueIsValid($serwis)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType', is_array($serwis) ? implode(', ', $serwis) : var_export($serwis, true), implode(', ', \PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType::getValidValues())), __LINE__);
        }
        $this->serwis = $serwis;

        return $this;
    }

    /**
     * Get numerNadaniaPowrot1 value
     * @return string|null
     */
    public function getNumerNadaniaPowrot1(): ?string
    {
        return $this->numerNadaniaPowrot1;
    }

    /**
     * Set numerNadaniaPowrot1 value
     * @param string $numerNadaniaPowrot1
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setNumerNadaniaPowrot1(?string $numerNadaniaPowrot1 = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadaniaPowrot1) && !is_string($numerNadaniaPowrot1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadaniaPowrot1, true), gettype($numerNadaniaPowrot1)), __LINE__);
        }
        $this->numerNadaniaPowrot1 = $numerNadaniaPowrot1;

        return $this;
    }

    /**
     * Get numerNadaniaPowrot2 value
     * @return string|null
     */
    public function getNumerNadaniaPowrot2(): ?string
    {
        return $this->numerNadaniaPowrot2;
    }

    /**
     * Set numerNadaniaPowrot2 value
     * @param string $numerNadaniaPowrot2
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setNumerNadaniaPowrot2(?string $numerNadaniaPowrot2 = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadaniaPowrot2) && !is_string($numerNadaniaPowrot2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadaniaPowrot2, true), gettype($numerNadaniaPowrot2)), __LINE__);
        }
        $this->numerNadaniaPowrot2 = $numerNadaniaPowrot2;

        return $this;
    }

    /**
     * Get idPrzesylkaZawartosc value
     * @return int|null
     */
    public function getIdPrzesylkaZawartosc(): ?int
    {
        return $this->idPrzesylkaZawartosc;
    }

    /**
     * Set idPrzesylkaZawartosc value
     * @param int $idPrzesylkaZawartosc
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setIdPrzesylkaZawartosc(?int $idPrzesylkaZawartosc = null): self
    {
        // validation for constraint: int
        if (!is_null($idPrzesylkaZawartosc) && !(is_int($idPrzesylkaZawartosc) || ctype_digit($idPrzesylkaZawartosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPrzesylkaZawartosc, true), gettype($idPrzesylkaZawartosc)), __LINE__);
        }
        $this->idPrzesylkaZawartosc = $idPrzesylkaZawartosc;

        return $this;
    }

    /**
     * Get idListaCzynnosci value
     * @return int|null
     */
    public function getIdListaCzynnosci(): ?int
    {
        return $this->idListaCzynnosci;
    }

    /**
     * Set idListaCzynnosci value
     * @param int $idListaCzynnosci
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setIdListaCzynnosci(?int $idListaCzynnosci = null): self
    {
        // validation for constraint: int
        if (!is_null($idListaCzynnosci) && !(is_int($idListaCzynnosci) || ctype_digit($idListaCzynnosci))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idListaCzynnosci, true), gettype($idListaCzynnosci)), __LINE__);
        }
        $this->idListaCzynnosci = $idListaCzynnosci;

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
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
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
     * Get opakowanie value
     * @return string|null
     */
    public function getOpakowanie(): ?string
    {
        return $this->opakowanie;
    }

    /**
     * Set opakowanie value
     * @uses \PocztaPolska\EnumType\OpakowaniePrzesylkaProceduralnaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\OpakowaniePrzesylkaProceduralnaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $opakowanie
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setOpakowanie(?string $opakowanie = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\OpakowaniePrzesylkaProceduralnaType::valueIsValid($opakowanie)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\OpakowaniePrzesylkaProceduralnaType', is_array($opakowanie) ? implode(', ', $opakowanie) : var_export($opakowanie, true), implode(', ', \PocztaPolska\EnumType\OpakowaniePrzesylkaProceduralnaType::getValidValues())), __LINE__);
        }
        $this->opakowanie = $opakowanie;

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
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
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
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
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
     * Get idAdresPrzesylkaPowrot value
     * @return int|null
     */
    public function getIdAdresPrzesylkaPowrot(): ?int
    {
        return $this->idAdresPrzesylkaPowrot;
    }

    /**
     * Set idAdresPrzesylkaPowrot value
     * @param int $idAdresPrzesylkaPowrot
     * @return \PocztaPolska\StructType\PrzesylkaProceduralnaType
     */
    public function setIdAdresPrzesylkaPowrot(?int $idAdresPrzesylkaPowrot = null): self
    {
        // validation for constraint: int
        if (!is_null($idAdresPrzesylkaPowrot) && !(is_int($idAdresPrzesylkaPowrot) || ctype_digit($idAdresPrzesylkaPowrot))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idAdresPrzesylkaPowrot, true), gettype($idAdresPrzesylkaPowrot)), __LINE__);
        }
        $this->idAdresPrzesylkaPowrot = $idAdresPrzesylkaPowrot;

        return $this;
    }
}
