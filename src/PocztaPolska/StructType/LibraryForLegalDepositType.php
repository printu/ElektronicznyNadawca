<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LibraryForLegalDepositType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LibraryForLegalDepositType extends AbstractStructBase
{
    /**
     * The idLibraryForLegalDeposit
     * Meta information extracted from the WSDL
     * - documentation: Library ID to use for shipment data in the <idLibraryForLegalDeposit/> element
     * - base: xsd:string
     * - maxLength: 4
     * - maxOccurs: 1
     * - minLength: 4
     * - minOccurs: 1
     * @var string
     */
    protected string $idLibraryForLegalDeposit;
    /**
     * The libraryName
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $libraryName;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - documentation: For a P.O. Box, this item includes a string &quot;skr. poczt.&quot; and box_number
     * - base: xsd:string
     * - maxLength: 255
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The houseNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $houseNumber = null;
    /**
     * The apartmentNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apartmentNumber = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;

    /**
     * Constructor method for LibraryForLegalDepositType
     * @uses LibraryForLegalDepositType::setIdLibraryForLegalDeposit()
     * @uses LibraryForLegalDepositType::setLibraryName()
     * @uses LibraryForLegalDepositType::setStreet()
     * @uses LibraryForLegalDepositType::setHouseNumber()
     * @uses LibraryForLegalDepositType::setApartmentNumber()
     * @uses LibraryForLegalDepositType::setZipCode()
     * @uses LibraryForLegalDepositType::setCity()
     * @param string $idLibraryForLegalDeposit
     * @param string $libraryName
     * @param string $street
     * @param string $houseNumber
     * @param string $apartmentNumber
     * @param string $zipCode
     * @param string $city
     */
    public function __construct(string $idLibraryForLegalDeposit, string $libraryName, ?string $street = null, ?string $houseNumber = null, ?string $apartmentNumber = null, ?string $zipCode = null, ?string $city = null)
    {
        $this
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setLibraryName($libraryName)
            ->setStreet($street)
            ->setHouseNumber($houseNumber)
            ->setApartmentNumber($apartmentNumber)
            ->setZipCode($zipCode)
            ->setCity($city);
    }

    /**
     * Get idLibraryForLegalDeposit value
     * @return string
     */
    public function getIdLibraryForLegalDeposit(): string
    {
        return $this->idLibraryForLegalDeposit;
    }

    /**
     * Set idLibraryForLegalDeposit value
     * @param string $idLibraryForLegalDeposit
     * @return \PocztaPolska\StructType\LibraryForLegalDepositType
     */
    public function setIdLibraryForLegalDeposit(string $idLibraryForLegalDeposit): self
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
     * Get libraryName value
     * @return string
     */
    public function getLibraryName(): string
    {
        return $this->libraryName;
    }

    /**
     * Set libraryName value
     * @param string $libraryName
     * @return \PocztaPolska\StructType\LibraryForLegalDepositType
     */
    public function setLibraryName(string $libraryName): self
    {
        // validation for constraint: string
        if (!is_null($libraryName) && !is_string($libraryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libraryName, true), gettype($libraryName)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($libraryName) && mb_strlen((string) $libraryName) > 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen((string) $libraryName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($libraryName) && mb_strlen((string) $libraryName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $libraryName)), __LINE__);
        }
        $this->libraryName = $libraryName;

        return $this;
    }

    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Set street value
     * @param string $street
     * @return \PocztaPolska\StructType\LibraryForLegalDepositType
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($street) && mb_strlen((string) $street) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $street)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($street) && mb_strlen((string) $street) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $street)), __LINE__);
        }
        $this->street = $street;

        return $this;
    }

    /**
     * Get houseNumber value
     * @return string|null
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * Set houseNumber value
     * @param string $houseNumber
     * @return \PocztaPolska\StructType\LibraryForLegalDepositType
     */
    public function setHouseNumber(?string $houseNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($houseNumber) && !is_string($houseNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($houseNumber, true), gettype($houseNumber)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($houseNumber) && mb_strlen((string) $houseNumber) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen((string) $houseNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($houseNumber) && mb_strlen((string) $houseNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $houseNumber)), __LINE__);
        }
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get apartmentNumber value
     * @return string|null
     */
    public function getApartmentNumber(): ?string
    {
        return $this->apartmentNumber;
    }

    /**
     * Set apartmentNumber value
     * @param string $apartmentNumber
     * @return \PocztaPolska\StructType\LibraryForLegalDepositType
     */
    public function setApartmentNumber(?string $apartmentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($apartmentNumber) && !is_string($apartmentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartmentNumber, true), gettype($apartmentNumber)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($apartmentNumber) && mb_strlen((string) $apartmentNumber) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen((string) $apartmentNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($apartmentNumber) && mb_strlen((string) $apartmentNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $apartmentNumber)), __LINE__);
        }
        $this->apartmentNumber = $apartmentNumber;

        return $this;
    }

    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \PocztaPolska\StructType\LibraryForLegalDepositType
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($zipCode) && mb_strlen((string) $zipCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $zipCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($zipCode) && mb_strlen((string) $zipCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set city value
     * @param string $city
     * @return \PocztaPolska\StructType\LibraryForLegalDepositType
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        // validation for constraint: maxLength(63)
        if (!is_null($city) && mb_strlen((string) $city) > 63) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 63', mb_strlen((string) $city)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($city) && mb_strlen((string) $city) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $city)), __LINE__);
        }
        $this->city = $city;

        return $this;
    }
}
