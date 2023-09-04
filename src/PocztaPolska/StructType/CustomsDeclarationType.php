<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsDeclarationType StructType
 * Meta information extracted from the WSDL
 * - maxOccurs: 1
 * - minOccurs: 0
 * - type: xsd:string
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomsDeclarationType extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $content;
    /**
     * The currencyCode
     * Meta information extracted from the WSDL
     * - documentation: Code (ISO 4217) of the currency in which the values of the items specified in the shipmentContentsDetails element are expressed. example: EUR
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $currencyCode;
    /**
     * The shipmentContentsDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\ShipmentContentsDetailsType[]
     */
    protected array $shipmentContentsDetails;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: CN type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The accompanyingDocuments
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AccompanyingDocumentsType[]
     */
    protected ?array $accompanyingDocuments = null;
    /**
     * The explanation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $explanation = null;
    /**
     * The postalCharges
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postalCharges = null;
    /**
     * The comments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The importerReferenceNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $importerReferenceNumber = null;
    /**
     * The importerPhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $importerPhoneNumber = null;
    /**
     * The customsReferenceNumber
     * @var string|null
     */
    protected ?string $customsReferenceNumber = null;

    /**
     * Constructor method for CustomsDeclarationType
     * @uses CustomsDeclarationType::setContent()
     * @uses CustomsDeclarationType::setCurrencyCode()
     * @uses CustomsDeclarationType::setShipmentContentsDetails()
     * @uses CustomsDeclarationType::setType()
     * @uses CustomsDeclarationType::setAccompanyingDocuments()
     * @uses CustomsDeclarationType::setExplanation()
     * @uses CustomsDeclarationType::setPostalCharges()
     * @uses CustomsDeclarationType::setComments()
     * @uses CustomsDeclarationType::setImporterReferenceNumber()
     * @uses CustomsDeclarationType::setImporterPhoneNumber()
     * @uses CustomsDeclarationType::setCustomsReferenceNumber()
     * @param string $content
     * @param string $currencyCode
     * @param \PocztaPolska\StructType\ShipmentContentsDetailsType[] $shipmentContentsDetails
     * @param string $type
     * @param \PocztaPolska\StructType\AccompanyingDocumentsType[] $accompanyingDocuments
     * @param string $explanation
     * @param string $postalCharges
     * @param string $comments
     * @param string $importerReferenceNumber
     * @param string $importerPhoneNumber
     * @param string $customsReferenceNumber
     */
    public function __construct(string $content, string $currencyCode, array $shipmentContentsDetails, ?string $type = null, ?array $accompanyingDocuments = null, ?string $explanation = null, ?string $postalCharges = null, ?string $comments = null, ?string $importerReferenceNumber = null, ?string $importerPhoneNumber = null, ?string $customsReferenceNumber = null)
    {
        $this
            ->setContent($content)
            ->setCurrencyCode($currencyCode)
            ->setShipmentContentsDetails($shipmentContentsDetails)
            ->setType($type)
            ->setAccompanyingDocuments($accompanyingDocuments)
            ->setExplanation($explanation)
            ->setPostalCharges($postalCharges)
            ->setComments($comments)
            ->setImporterReferenceNumber($importerReferenceNumber)
            ->setImporterPhoneNumber($importerPhoneNumber)
            ->setCustomsReferenceNumber($customsReferenceNumber);
    }

    /**
     * Get content value
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set content value
     * @uses \PocztaPolska\EnumType\CustomsDeclarationContentEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\CustomsDeclarationContentEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $content
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setContent(string $content): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\CustomsDeclarationContentEnum::valueIsValid($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\CustomsDeclarationContentEnum', is_array($content) ? implode(', ', $content) : var_export($content, true), implode(', ', \PocztaPolska\EnumType\CustomsDeclarationContentEnum::getValidValues())), __LINE__);
        }
        $this->content = $content;

        return $this;
    }

    /**
     * Get currencyCode value
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get shipmentContentsDetails value
     * @return \PocztaPolska\StructType\ShipmentContentsDetailsType[]
     */
    public function getShipmentContentsDetails(): array
    {
        return $this->shipmentContentsDetails;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setShipmentContentsDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentContentsDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentContentsDetailsForArrayConstraintFromSetShipmentContentsDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customsDeclarationTypeShipmentContentsDetailsItem) {
            // validation for constraint: itemType
            if (!$customsDeclarationTypeShipmentContentsDetailsItem instanceof \PocztaPolska\StructType\ShipmentContentsDetailsType) {
                $invalidValues[] = is_object($customsDeclarationTypeShipmentContentsDetailsItem) ? get_class($customsDeclarationTypeShipmentContentsDetailsItem) : sprintf('%s(%s)', gettype($customsDeclarationTypeShipmentContentsDetailsItem), var_export($customsDeclarationTypeShipmentContentsDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipmentContentsDetails property can only contain items of type \PocztaPolska\StructType\ShipmentContentsDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set shipmentContentsDetails value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ShipmentContentsDetailsType[] $shipmentContentsDetails
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setShipmentContentsDetails(array $shipmentContentsDetails): self
    {
        // validation for constraint: array
        if ('' !== ($shipmentContentsDetailsArrayErrorMessage = self::validateShipmentContentsDetailsForArrayConstraintFromSetShipmentContentsDetails($shipmentContentsDetails))) {
            throw new InvalidArgumentException($shipmentContentsDetailsArrayErrorMessage, __LINE__);
        }
        $this->shipmentContentsDetails = $shipmentContentsDetails;

        return $this;
    }

    /**
     * Add item to shipmentContentsDetails value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ShipmentContentsDetailsType $item
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function addToShipmentContentsDetails(\PocztaPolska\StructType\ShipmentContentsDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ShipmentContentsDetailsType) {
            throw new InvalidArgumentException(sprintf('The shipmentContentsDetails property can only contain items of type \PocztaPolska\StructType\ShipmentContentsDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipmentContentsDetails[] = $item;

        return $this;
    }

    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type value
     * @uses \PocztaPolska\EnumType\CustomsDeclarationTypeEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\CustomsDeclarationTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\CustomsDeclarationTypeEnum::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\CustomsDeclarationTypeEnum', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \PocztaPolska\EnumType\CustomsDeclarationTypeEnum::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get accompanyingDocuments value
     * @return \PocztaPolska\StructType\AccompanyingDocumentsType[]
     */
    public function getAccompanyingDocuments(): ?array
    {
        return $this->accompanyingDocuments;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAccompanyingDocuments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccompanyingDocuments method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccompanyingDocumentsForArrayConstraintFromSetAccompanyingDocuments(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customsDeclarationTypeAccompanyingDocumentsItem) {
            // validation for constraint: itemType
            if (!$customsDeclarationTypeAccompanyingDocumentsItem instanceof \PocztaPolska\StructType\AccompanyingDocumentsType) {
                $invalidValues[] = is_object($customsDeclarationTypeAccompanyingDocumentsItem) ? get_class($customsDeclarationTypeAccompanyingDocumentsItem) : sprintf('%s(%s)', gettype($customsDeclarationTypeAccompanyingDocumentsItem), var_export($customsDeclarationTypeAccompanyingDocumentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The accompanyingDocuments property can only contain items of type \PocztaPolska\StructType\AccompanyingDocumentsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set accompanyingDocuments value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\AccompanyingDocumentsType[] $accompanyingDocuments
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setAccompanyingDocuments(?array $accompanyingDocuments = null): self
    {
        // validation for constraint: array
        if ('' !== ($accompanyingDocumentsArrayErrorMessage = self::validateAccompanyingDocumentsForArrayConstraintFromSetAccompanyingDocuments($accompanyingDocuments))) {
            throw new InvalidArgumentException($accompanyingDocumentsArrayErrorMessage, __LINE__);
        }
        $this->accompanyingDocuments = $accompanyingDocuments;

        return $this;
    }

    /**
     * Add item to accompanyingDocuments value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\AccompanyingDocumentsType $item
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function addToAccompanyingDocuments(\PocztaPolska\StructType\AccompanyingDocumentsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\AccompanyingDocumentsType) {
            throw new InvalidArgumentException(sprintf('The accompanyingDocuments property can only contain items of type \PocztaPolska\StructType\AccompanyingDocumentsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->accompanyingDocuments[] = $item;

        return $this;
    }

    /**
     * Get explanation value
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * Set explanation value
     * @param string $explanation
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setExplanation(?string $explanation = null): self
    {
        // validation for constraint: string
        if (!is_null($explanation) && !is_string($explanation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanation, true), gettype($explanation)), __LINE__);
        }
        $this->explanation = $explanation;

        return $this;
    }

    /**
     * Get postalCharges value
     * @return string|null
     */
    public function getPostalCharges(): ?string
    {
        return $this->postalCharges;
    }

    /**
     * Set postalCharges value
     * @param string $postalCharges
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setPostalCharges(?string $postalCharges = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCharges) && !is_string($postalCharges)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCharges, true), gettype($postalCharges)), __LINE__);
        }
        $this->postalCharges = $postalCharges;

        return $this;
    }

    /**
     * Get comments value
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * Set comments value
     * @param string $comments
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get importerReferenceNumber value
     * @return string|null
     */
    public function getImporterReferenceNumber(): ?string
    {
        return $this->importerReferenceNumber;
    }

    /**
     * Set importerReferenceNumber value
     * @param string $importerReferenceNumber
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setImporterReferenceNumber(?string $importerReferenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($importerReferenceNumber) && !is_string($importerReferenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importerReferenceNumber, true), gettype($importerReferenceNumber)), __LINE__);
        }
        $this->importerReferenceNumber = $importerReferenceNumber;

        return $this;
    }

    /**
     * Get importerPhoneNumber value
     * @return string|null
     */
    public function getImporterPhoneNumber(): ?string
    {
        return $this->importerPhoneNumber;
    }

    /**
     * Set importerPhoneNumber value
     * @param string $importerPhoneNumber
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setImporterPhoneNumber(?string $importerPhoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($importerPhoneNumber) && !is_string($importerPhoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importerPhoneNumber, true), gettype($importerPhoneNumber)), __LINE__);
        }
        $this->importerPhoneNumber = $importerPhoneNumber;

        return $this;
    }

    /**
     * Get customsReferenceNumber value
     * @return string|null
     */
    public function getCustomsReferenceNumber(): ?string
    {
        return $this->customsReferenceNumber;
    }

    /**
     * Set customsReferenceNumber value
     * @param string $customsReferenceNumber
     * @return \PocztaPolska\StructType\CustomsDeclarationType
     */
    public function setCustomsReferenceNumber(?string $customsReferenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customsReferenceNumber) && !is_string($customsReferenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsReferenceNumber, true), gettype($customsReferenceNumber)), __LINE__);
        }
        $this->customsReferenceNumber = $customsReferenceNumber;

        return $this;
    }
}
