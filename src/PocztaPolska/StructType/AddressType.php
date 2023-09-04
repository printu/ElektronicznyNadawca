<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * Meta information extracted from the WSDL
 * - maxOccurs: 1
 * - minOccurs: 0
 * - type: xsd:string
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressType extends AbstractStructBase
{
    /**
     * The firstNameOrCompanyName
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstNameOrCompanyName = null;
    /**
     * The lastNameOrCompanyNameContinued
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastNameOrCompanyNameContinued = null;
    /**
     * The street
     * Meta information extracted from the WSDL
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
     * The apartamentNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apartamentNumber = null;
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
     * The countryCode
     * Meta information extracted from the WSDL
     * - documentation: Code (ISO 3166) of the country.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mobile = null;
    /**
     * The telephone
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $telephone = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minLength: 6
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The contactPerson
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The nip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nip = null;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setFirstNameOrCompanyName()
     * @uses AddressType::setLastNameOrCompanyNameContinued()
     * @uses AddressType::setStreet()
     * @uses AddressType::setHouseNumber()
     * @uses AddressType::setApartamentNumber()
     * @uses AddressType::setCity()
     * @uses AddressType::setZipCode()
     * @uses AddressType::setCountryCode()
     * @uses AddressType::setMobile()
     * @uses AddressType::setTelephone()
     * @uses AddressType::setEmail()
     * @uses AddressType::setContactPerson()
     * @uses AddressType::setNip()
     * @param string $firstNameOrCompanyName
     * @param string $lastNameOrCompanyNameContinued
     * @param string $street
     * @param string $houseNumber
     * @param string $apartamentNumber
     * @param string $city
     * @param string $zipCode
     * @param string $countryCode
     * @param string $mobile
     * @param string $telephone
     * @param string $email
     * @param string $contactPerson
     * @param string $nip
     */
    public function __construct(?string $firstNameOrCompanyName = null, ?string $lastNameOrCompanyNameContinued = null, ?string $street = null, ?string $houseNumber = null, ?string $apartamentNumber = null, ?string $city = null, ?string $zipCode = null, ?string $countryCode = null, ?string $mobile = null, ?string $telephone = null, ?string $email = null, ?string $contactPerson = null, ?string $nip = null)
    {
        $this
            ->setFirstNameOrCompanyName($firstNameOrCompanyName)
            ->setLastNameOrCompanyNameContinued($lastNameOrCompanyNameContinued)
            ->setStreet($street)
            ->setHouseNumber($houseNumber)
            ->setApartamentNumber($apartamentNumber)
            ->setCity($city)
            ->setZipCode($zipCode)
            ->setCountryCode($countryCode)
            ->setMobile($mobile)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setContactPerson($contactPerson)
            ->setNip($nip);
    }
    /**
     * Get firstNameOrCompanyName value
     * @return string|null
     */
    public function getFirstNameOrCompanyName(): ?string
    {
        return $this->firstNameOrCompanyName;
    }
    /**
     * Set firstNameOrCompanyName value
     * @param string $firstNameOrCompanyName
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setFirstNameOrCompanyName(?string $firstNameOrCompanyName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstNameOrCompanyName) && !is_string($firstNameOrCompanyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstNameOrCompanyName, true), gettype($firstNameOrCompanyName)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($firstNameOrCompanyName) && mb_strlen((string) $firstNameOrCompanyName) > 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen((string) $firstNameOrCompanyName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($firstNameOrCompanyName) && mb_strlen((string) $firstNameOrCompanyName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $firstNameOrCompanyName)), __LINE__);
        }
        $this->firstNameOrCompanyName = $firstNameOrCompanyName;
        
        return $this;
    }
    /**
     * Get lastNameOrCompanyNameContinued value
     * @return string|null
     */
    public function getLastNameOrCompanyNameContinued(): ?string
    {
        return $this->lastNameOrCompanyNameContinued;
    }
    /**
     * Set lastNameOrCompanyNameContinued value
     * @param string $lastNameOrCompanyNameContinued
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setLastNameOrCompanyNameContinued(?string $lastNameOrCompanyNameContinued = null): self
    {
        // validation for constraint: string
        if (!is_null($lastNameOrCompanyNameContinued) && !is_string($lastNameOrCompanyNameContinued)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastNameOrCompanyNameContinued, true), gettype($lastNameOrCompanyNameContinued)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($lastNameOrCompanyNameContinued) && mb_strlen((string) $lastNameOrCompanyNameContinued) > 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen((string) $lastNameOrCompanyNameContinued)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($lastNameOrCompanyNameContinued) && mb_strlen((string) $lastNameOrCompanyNameContinued) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $lastNameOrCompanyNameContinued)), __LINE__);
        }
        $this->lastNameOrCompanyNameContinued = $lastNameOrCompanyNameContinued;
        
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
     * @return \PocztaPolska\StructType\AddressType
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
     * @return \PocztaPolska\StructType\AddressType
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
     * Get apartamentNumber value
     * @return string|null
     */
    public function getApartamentNumber(): ?string
    {
        return $this->apartamentNumber;
    }
    /**
     * Set apartamentNumber value
     * @param string $apartamentNumber
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setApartamentNumber(?string $apartamentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($apartamentNumber) && !is_string($apartamentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartamentNumber, true), gettype($apartamentNumber)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($apartamentNumber) && mb_strlen((string) $apartamentNumber) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen((string) $apartamentNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($apartamentNumber) && mb_strlen((string) $apartamentNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $apartamentNumber)), __LINE__);
        }
        $this->apartamentNumber = $apartamentNumber;
        
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
     * @return \PocztaPolska\StructType\AddressType
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
     * @return \PocztaPolska\StructType\AddressType
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
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get mobile value
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setMobile(?string $mobile = null): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get telephone value
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Set telephone value
     * @param string $telephone
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setTelephone(?string $telephone = null): self
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephone, true), gettype($telephone)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($telephone) && mb_strlen((string) $telephone) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $telephone)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($telephone) && mb_strlen((string) $telephone) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $telephone)), __LINE__);
        }
        $this->telephone = $telephone;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($email) && mb_strlen((string) $email) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $email)), __LINE__);
        }
        // validation for constraint: minLength(6)
        if (!is_null($email) && mb_strlen((string) $email) < 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 6', mb_strlen((string) $email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $contactPerson
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setContactPerson(?string $contactPerson = null): self
    {
        // validation for constraint: string
        if (!is_null($contactPerson) && !is_string($contactPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPerson, true), gettype($contactPerson)), __LINE__);
        }
        $this->contactPerson = $contactPerson;
        
        return $this;
    }
    /**
     * Get nip value
     * @return string|null
     */
    public function getNip(): ?string
    {
        return $this->nip;
    }
    /**
     * Set nip value
     * @param string $nip
     * @return \PocztaPolska\StructType\AddressType
     */
    public function setNip(?string $nip = null): self
    {
        // validation for constraint: string
        if (!is_null($nip) && !is_string($nip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nip, true), gettype($nip)), __LINE__);
        }
        $this->nip = $nip;
        
        return $this;
    }
}
