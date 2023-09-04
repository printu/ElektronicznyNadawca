<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checklistTemplateType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChecklistTemplateType extends AbstractStructBase
{
    /**
     * The idChecklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idChecklistTemplate = null;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idKarta = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 45
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The infoForCourier
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 1000
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $infoForCourier = null;
    /**
     * The default
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $default = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The logo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $logo = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
    /**
     * The additionalActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AdditionalActivityType[]
     */
    protected ?array $additionalActivity = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - documentation: GUID elementu checklistTemplate. Wartość wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * Constructor method for checklistTemplateType
     * @uses ChecklistTemplateType::setIdChecklistTemplate()
     * @uses ChecklistTemplateType::setIdKarta()
     * @uses ChecklistTemplateType::setName()
     * @uses ChecklistTemplateType::setTitle()
     * @uses ChecklistTemplateType::setDescription()
     * @uses ChecklistTemplateType::setInfoForCourier()
     * @uses ChecklistTemplateType::setDefault()
     * @uses ChecklistTemplateType::setValidFrom()
     * @uses ChecklistTemplateType::setValidTo()
     * @uses ChecklistTemplateType::setLogo()
     * @uses ChecklistTemplateType::setService()
     * @uses ChecklistTemplateType::setAdditionalActivity()
     * @uses ChecklistTemplateType::setGuid()
     * @param int $idChecklistTemplate
     * @param int $idKarta
     * @param string $name
     * @param string $title
     * @param string $description
     * @param string $infoForCourier
     * @param bool $default
     * @param string $validFrom
     * @param string $validTo
     * @param string $logo
     * @param string $service
     * @param \PocztaPolska\StructType\AdditionalActivityType[] $additionalActivity
     * @param string $guid
     */
    public function __construct(?int $idChecklistTemplate = null, ?int $idKarta = null, ?string $name = null, ?string $title = null, ?string $description = null, ?string $infoForCourier = null, ?bool $default = null, ?string $validFrom = null, ?string $validTo = null, ?string $logo = null, ?string $service = null, ?array $additionalActivity = null, ?string $guid = null)
    {
        $this
            ->setIdChecklistTemplate($idChecklistTemplate)
            ->setIdKarta($idKarta)
            ->setName($name)
            ->setTitle($title)
            ->setDescription($description)
            ->setInfoForCourier($infoForCourier)
            ->setDefault($default)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setLogo($logo)
            ->setService($service)
            ->setAdditionalActivity($additionalActivity)
            ->setGuid($guid);
    }
    /**
     * Get idChecklistTemplate value
     * @return int|null
     */
    public function getIdChecklistTemplate(): ?int
    {
        return $this->idChecklistTemplate;
    }
    /**
     * Set idChecklistTemplate value
     * @param int $idChecklistTemplate
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setIdChecklistTemplate(?int $idChecklistTemplate = null): self
    {
        // validation for constraint: int
        if (!is_null($idChecklistTemplate) && !(is_int($idChecklistTemplate) || ctype_digit($idChecklistTemplate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idChecklistTemplate, true), gettype($idChecklistTemplate)), __LINE__);
        }
        $this->idChecklistTemplate = $idChecklistTemplate;
        
        return $this;
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;
        
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
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($name) && mb_strlen((string) $name) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($title) && mb_strlen((string) $title) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($description) && mb_strlen((string) $description) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get infoForCourier value
     * @return string|null
     */
    public function getInfoForCourier(): ?string
    {
        return $this->infoForCourier;
    }
    /**
     * Set infoForCourier value
     * @param string $infoForCourier
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setInfoForCourier(?string $infoForCourier = null): self
    {
        // validation for constraint: string
        if (!is_null($infoForCourier) && !is_string($infoForCourier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoForCourier, true), gettype($infoForCourier)), __LINE__);
        }
        // validation for constraint: maxLength(1000)
        if (!is_null($infoForCourier) && mb_strlen((string) $infoForCourier) > 1000) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1000', mb_strlen((string) $infoForCourier)), __LINE__);
        }
        $this->infoForCourier = $infoForCourier;
        
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
     * @return \PocztaPolska\StructType\ChecklistTemplateType
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
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
    /**
     * Get logo value
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }
    /**
     * Set logo value
     * @param string $logo
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setLogo(?string $logo = null): self
    {
        // validation for constraint: string
        if (!is_null($logo) && !is_string($logo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logo, true), gettype($logo)), __LINE__);
        }
        $this->logo = $logo;
        
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @uses \PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $service
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType::valueIsValid($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType', is_array($service) ? implode(', ', $service) : var_export($service, true), implode(', ', \PocztaPolska\EnumType\SerwisPrzesylkaProceduralnaType::getValidValues())), __LINE__);
        }
        $this->service = $service;
        
        return $this;
    }
    /**
     * Get additionalActivity value
     * @return \PocztaPolska\StructType\AdditionalActivityType[]
     */
    public function getAdditionalActivity(): ?array
    {
        return $this->additionalActivity;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalActivity method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalActivityForArrayConstraintFromSetAdditionalActivity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $checklistTemplateTypeAdditionalActivityItem) {
            // validation for constraint: itemType
            if (!$checklistTemplateTypeAdditionalActivityItem instanceof \PocztaPolska\StructType\AdditionalActivityType) {
                $invalidValues[] = is_object($checklistTemplateTypeAdditionalActivityItem) ? get_class($checklistTemplateTypeAdditionalActivityItem) : sprintf('%s(%s)', gettype($checklistTemplateTypeAdditionalActivityItem), var_export($checklistTemplateTypeAdditionalActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The additionalActivity property can only contain items of type \PocztaPolska\StructType\AdditionalActivityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set additionalActivity value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\AdditionalActivityType[] $additionalActivity
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setAdditionalActivity(?array $additionalActivity = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalActivityArrayErrorMessage = self::validateAdditionalActivityForArrayConstraintFromSetAdditionalActivity($additionalActivity))) {
            throw new InvalidArgumentException($additionalActivityArrayErrorMessage, __LINE__);
        }
        $this->additionalActivity = $additionalActivity;
        
        return $this;
    }
    /**
     * Add item to additionalActivity value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\AdditionalActivityType $item
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function addToAdditionalActivity(\PocztaPolska\StructType\AdditionalActivityType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\AdditionalActivityType) {
            throw new InvalidArgumentException(sprintf('The additionalActivity property can only contain items of type \PocztaPolska\StructType\AdditionalActivityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->additionalActivity[] = $item;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \PocztaPolska\StructType\ChecklistTemplateType
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && mb_strlen((string) $guid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
}
