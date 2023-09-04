<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for returnDocumentProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returned during getting list of profiles
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReturnDocumentProfileType extends AbstractStructBase
{
    /**
     * The idProfile
     * Meta information extracted from the WSDL
     * - documentation: Required during updating profile. Returned during getting list of profiles.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idProfile = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 120
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The name2
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 120
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name2 = null;
    /**
     * The friendlyName
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * @var string|null
     */
    protected ?string $friendlyName = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 70
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The houseNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * @var string|null
     */
    protected ?string $houseNumber = null;
    /**
     * The premisesNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $premisesNumber = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 35
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The postalCode
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 5
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 9
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $mobile = null;
    /**
     * The phonenumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 9
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $phonenumber = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The default
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $default = null;
    /**
     * Constructor method for returnDocumentProfileType
     * @uses ReturnDocumentProfileType::setIdProfile()
     * @uses ReturnDocumentProfileType::setName()
     * @uses ReturnDocumentProfileType::setName2()
     * @uses ReturnDocumentProfileType::setFriendlyName()
     * @uses ReturnDocumentProfileType::setStreet()
     * @uses ReturnDocumentProfileType::setHouseNumber()
     * @uses ReturnDocumentProfileType::setPremisesNumber()
     * @uses ReturnDocumentProfileType::setCity()
     * @uses ReturnDocumentProfileType::setPostalCode()
     * @uses ReturnDocumentProfileType::setMobile()
     * @uses ReturnDocumentProfileType::setPhonenumber()
     * @uses ReturnDocumentProfileType::setEmail()
     * @uses ReturnDocumentProfileType::setDefault()
     * @param int $idProfile
     * @param string $name
     * @param string $name2
     * @param string $friendlyName
     * @param string $street
     * @param string $houseNumber
     * @param string $premisesNumber
     * @param string $city
     * @param string $postalCode
     * @param string $mobile
     * @param string $phonenumber
     * @param string $email
     * @param bool $default
     */
    public function __construct(?int $idProfile = null, ?string $name = null, ?string $name2 = null, ?string $friendlyName = null, ?string $street = null, ?string $houseNumber = null, ?string $premisesNumber = null, ?string $city = null, ?string $postalCode = null, ?string $mobile = null, ?string $phonenumber = null, ?string $email = null, ?bool $default = null)
    {
        $this
            ->setIdProfile($idProfile)
            ->setName($name)
            ->setName2($name2)
            ->setFriendlyName($friendlyName)
            ->setStreet($street)
            ->setHouseNumber($houseNumber)
            ->setPremisesNumber($premisesNumber)
            ->setCity($city)
            ->setPostalCode($postalCode)
            ->setMobile($mobile)
            ->setPhonenumber($phonenumber)
            ->setEmail($email)
            ->setDefault($default);
    }
    /**
     * Get idProfile value
     * @return int|null
     */
    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }
    /**
     * Set idProfile value
     * @param int $idProfile
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setIdProfile(?int $idProfile = null): self
    {
        // validation for constraint: int
        if (!is_null($idProfile) && !(is_int($idProfile) || ctype_digit($idProfile))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idProfile, true), gettype($idProfile)), __LINE__);
        }
        $this->idProfile = $idProfile;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(120)
        if (!is_null($name) && mb_strlen((string) $name) > 120) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 120', mb_strlen((string) $name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get name2 value
     * @return string|null
     */
    public function getName2(): ?string
    {
        return $this->name2;
    }
    /**
     * Set name2 value
     * @param string $name2
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setName2(?string $name2 = null): self
    {
        // validation for constraint: string
        if (!is_null($name2) && !is_string($name2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name2, true), gettype($name2)), __LINE__);
        }
        // validation for constraint: maxLength(120)
        if (!is_null($name2) && mb_strlen((string) $name2) > 120) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 120', mb_strlen((string) $name2)), __LINE__);
        }
        $this->name2 = $name2;
        
        return $this;
    }
    /**
     * Get friendlyName value
     * @return string|null
     */
    public function getFriendlyName(): ?string
    {
        return $this->friendlyName;
    }
    /**
     * Set friendlyName value
     * @param string $friendlyName
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setFriendlyName(?string $friendlyName = null): self
    {
        // validation for constraint: string
        if (!is_null($friendlyName) && !is_string($friendlyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($friendlyName, true), gettype($friendlyName)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($friendlyName) && mb_strlen((string) $friendlyName) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $friendlyName)), __LINE__);
        }
        $this->friendlyName = $friendlyName;
        
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
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        // validation for constraint: maxLength(70)
        if (!is_null($street) && mb_strlen((string) $street) > 70) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 70', mb_strlen((string) $street)), __LINE__);
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
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
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
        $this->houseNumber = $houseNumber;
        
        return $this;
    }
    /**
     * Get premisesNumber value
     * @return string|null
     */
    public function getPremisesNumber(): ?string
    {
        return $this->premisesNumber;
    }
    /**
     * Set premisesNumber value
     * @param string $premisesNumber
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setPremisesNumber(?string $premisesNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($premisesNumber) && !is_string($premisesNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($premisesNumber, true), gettype($premisesNumber)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($premisesNumber) && mb_strlen((string) $premisesNumber) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen((string) $premisesNumber)), __LINE__);
        }
        $this->premisesNumber = $premisesNumber;
        
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
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($city) && mb_strlen((string) $city) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($postalCode) && mb_strlen((string) $postalCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
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
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setMobile(?string $mobile = null): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($mobile) && mb_strlen((string) $mobile) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen((string) $mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get phonenumber value
     * @return string|null
     */
    public function getPhonenumber(): ?string
    {
        return $this->phonenumber;
    }
    /**
     * Set phonenumber value
     * @param string $phonenumber
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setPhonenumber(?string $phonenumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phonenumber) && !is_string($phonenumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phonenumber, true), gettype($phonenumber)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($phonenumber) && mb_strlen((string) $phonenumber) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen((string) $phonenumber)), __LINE__);
        }
        $this->phonenumber = $phonenumber;
        
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
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
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
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get default value
     * @return bool|null
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param bool $default
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType
     */
    public function setDefault(?bool $default = null): self
    {
        // validation for constraint: boolean
        if (!is_null($default) && !is_bool($default)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default, true), gettype($default)), __LINE__);
        }
        $this->default = $default;
        
        return $this;
    }
}
