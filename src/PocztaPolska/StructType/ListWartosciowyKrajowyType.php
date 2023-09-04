<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for listWartosciowyKrajowyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListWartosciowyKrajowyType extends PrzesylkaRejestrowanaType
{
    /**
     * The idLibraryForLegalDeposit
     * Meta information extracted from the WSDL
     * - documentation: Identifier library for legal deposit from list downloaded using the getLibrariesForLegalDeposits method
     * - base: xsd:string
     * - maxLength: 4
     * - maxOccurs: 1
     * - minLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idLibraryForLegalDeposit = null;
    /**
     * The posteRestante
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
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $iloscPotwierdzenOdbioru = null;
    /**
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - documentation: Format przesyłki
     * @var string|null
     */
    protected ?string $format = null;
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
     * The numerWewnetrznyPrzesylki
     * @var string|null
     */
    protected ?string $numerWewnetrznyPrzesylki = null;
    /**
     * The egzemplarzBiblioteczny
     * @var bool|null
     */
    protected ?bool $egzemplarzBiblioteczny = null;
    /**
     * The dlaOciemnialych
     * @var bool|null
     */
    protected ?bool $dlaOciemnialych = null;

    /**
     * Constructor method for listWartosciowyKrajowyType
     * @uses ListWartosciowyKrajowyType::setIdLibraryForLegalDeposit()
     * @uses ListWartosciowyKrajowyType::setPosteRestante()
     * @uses ListWartosciowyKrajowyType::setWartosc()
     * @uses ListWartosciowyKrajowyType::setIloscPotwierdzenOdbioru()
     * @uses ListWartosciowyKrajowyType::setKategoria()
     * @uses ListWartosciowyKrajowyType::setFormat()
     * @uses ListWartosciowyKrajowyType::setMasa()
     * @uses ListWartosciowyKrajowyType::setNumerWewnetrznyPrzesylki()
     * @uses ListWartosciowyKrajowyType::setEgzemplarzBiblioteczny()
     * @uses ListWartosciowyKrajowyType::setDlaOciemnialych()
     * @param string $idLibraryForLegalDeposit
     * @param bool $posteRestante
     * @param int $wartosc
     * @param int $iloscPotwierdzenOdbioru
     * @param string $kategoria
     * @param string $format
     * @param int $masa
     * @param string $numerWewnetrznyPrzesylki
     * @param bool $egzemplarzBiblioteczny
     * @param bool $dlaOciemnialych
     */
    public function __construct(?string $idLibraryForLegalDeposit = null, ?bool $posteRestante = null, ?int $wartosc = null, ?int $iloscPotwierdzenOdbioru = null, ?string $kategoria = null, ?string $format = null, ?int $masa = null, ?string $numerWewnetrznyPrzesylki = null, ?bool $egzemplarzBiblioteczny = null, ?bool $dlaOciemnialych = null)
    {
        $this
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setPosteRestante($posteRestante)
            ->setWartosc($wartosc)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setKategoria($kategoria)
            ->setFormat($format)
            ->setMasa($masa)
            ->setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych);
    }

    /**
     * Get idLibraryForLegalDeposit value
     * @return string|null
     */
    public function getIdLibraryForLegalDeposit(): ?string
    {
        return $this->idLibraryForLegalDeposit;
    }

    /**
     * Set idLibraryForLegalDeposit value
     * @param string $idLibraryForLegalDeposit
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
     */
    public function setIdLibraryForLegalDeposit(?string $idLibraryForLegalDeposit = null): self
    {
        // validation for constraint: string
        if (!is_null($idLibraryForLegalDeposit) && !is_string($idLibraryForLegalDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idLibraryForLegalDeposit, true), gettype($idLibraryForLegalDeposit)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($idLibraryForLegalDeposit) && mb_strlen((string) $idLibraryForLegalDeposit) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $idLibraryForLegalDeposit)), __LINE__);
        }
        // validation for constraint: minLength(4)
        if (!is_null($idLibraryForLegalDeposit) && mb_strlen((string) $idLibraryForLegalDeposit) < 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 4', mb_strlen((string) $idLibraryForLegalDeposit)), __LINE__);
        }
        $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;

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
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
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
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
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
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
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
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
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
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * Set format value
     * @uses \PocztaPolska\EnumType\FormatType::valueIsValid()
     * @uses \PocztaPolska\EnumType\FormatType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $format
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\FormatType::valueIsValid($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\FormatType', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \PocztaPolska\EnumType\FormatType::getValidValues())), __LINE__);
        }
        $this->format = $format;

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
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
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
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
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
     * Get egzemplarzBiblioteczny value
     * @return bool|null
     */
    public function getEgzemplarzBiblioteczny(): ?bool
    {
        return $this->egzemplarzBiblioteczny;
    }

    /**
     * Set egzemplarzBiblioteczny value
     * @param bool $egzemplarzBiblioteczny
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
     */
    public function setEgzemplarzBiblioteczny(?bool $egzemplarzBiblioteczny = null): self
    {
        // validation for constraint: boolean
        if (!is_null($egzemplarzBiblioteczny) && !is_bool($egzemplarzBiblioteczny)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($egzemplarzBiblioteczny, true), gettype($egzemplarzBiblioteczny)), __LINE__);
        }
        $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;

        return $this;
    }

    /**
     * Get dlaOciemnialych value
     * @return bool|null
     */
    public function getDlaOciemnialych(): ?bool
    {
        return $this->dlaOciemnialych;
    }

    /**
     * Set dlaOciemnialych value
     * @param bool $dlaOciemnialych
     * @return \PocztaPolska\StructType\ListWartosciowyKrajowyType
     */
    public function setDlaOciemnialych(?bool $dlaOciemnialych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dlaOciemnialych) && !is_bool($dlaOciemnialych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dlaOciemnialych, true), gettype($dlaOciemnialych)), __LINE__);
        }
        $this->dlaOciemnialych = $dlaOciemnialych;

        return $this;
    }
}
