<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaNierejestrowanaKrajowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaNierejestrowanaKrajowaType extends PrzesylkaNieRejestrowanaType
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
     * The egzemplarzBiblioteczny
     * @var bool|null
     */
    protected ?bool $egzemplarzBiblioteczny = null;
    /**
     * Constructor method for przesylkaNierejestrowanaKrajowaType
     * @uses PrzesylkaNierejestrowanaKrajowaType::setIdLibraryForLegalDeposit()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setKategoria()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setFormat()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setMasa()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setEgzemplarzBiblioteczny()
     * @param string $idLibraryForLegalDeposit
     * @param string $kategoria
     * @param string $format
     * @param int $masa
     * @param bool $egzemplarzBiblioteczny
     */
    public function __construct(?string $idLibraryForLegalDeposit = null, ?string $kategoria = null, ?string $format = null, ?int $masa = null, ?bool $egzemplarzBiblioteczny = null)
    {
        $this
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setKategoria($kategoria)
            ->setFormat($format)
            ->setMasa($masa)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny);
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
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaKrajowaType
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
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaKrajowaType
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
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaKrajowaType
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
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaKrajowaType
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
     * @return \PocztaPolska\StructType\PrzesylkaNierejestrowanaKrajowaType
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
}
