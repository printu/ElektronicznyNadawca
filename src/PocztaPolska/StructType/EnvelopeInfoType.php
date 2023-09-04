<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for envelopeInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EnvelopeInfoType extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * The envelopeFilename
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $envelopeFilename = null;
    /**
     * The idEnvelope
     * @var int|null
     */
    protected ?int $idEnvelope = null;
    /**
     * The envelopeStatus
     * @var string|null
     */
    protected ?string $envelopeStatus = null;
    /**
     * The dataTransmisji
     * @var string|null
     */
    protected ?string $dataTransmisji = null;
    /**
     * Constructor method for envelopeInfoType
     * @uses EnvelopeInfoType::setError()
     * @uses EnvelopeInfoType::setEnvelopeFilename()
     * @uses EnvelopeInfoType::setIdEnvelope()
     * @uses EnvelopeInfoType::setEnvelopeStatus()
     * @uses EnvelopeInfoType::setDataTransmisji()
     * @param \PocztaPolska\StructType\ErrorType[] $error
     * @param string[] $envelopeFilename
     * @param int $idEnvelope
     * @param string $envelopeStatus
     * @param string $dataTransmisji
     */
    public function __construct(?array $error = null, ?array $envelopeFilename = null, ?int $idEnvelope = null, ?string $envelopeStatus = null, ?string $dataTransmisji = null)
    {
        $this
            ->setError($error)
            ->setEnvelopeFilename($envelopeFilename)
            ->setIdEnvelope($idEnvelope)
            ->setEnvelopeStatus($envelopeStatus)
            ->setDataTransmisji($dataTransmisji);
    }
    /**
     * Get error value
     * @return \PocztaPolska\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $envelopeInfoTypeErrorItem) {
            // validation for constraint: itemType
            if (!$envelopeInfoTypeErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($envelopeInfoTypeErrorItem) ? get_class($envelopeInfoTypeErrorItem) : sprintf('%s(%s)', gettype($envelopeInfoTypeErrorItem), var_export($envelopeInfoTypeErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \PocztaPolska\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ErrorType[] $error
     * @return \PocztaPolska\StructType\EnvelopeInfoType
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ErrorType $item
     * @return \PocztaPolska\StructType\EnvelopeInfoType
     */
    public function addToError(\PocztaPolska\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \PocztaPolska\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
    /**
     * Get envelopeFilename value
     * @return string[]
     */
    public function getEnvelopeFilename(): ?array
    {
        return $this->envelopeFilename;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEnvelopeFilename method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopeFilename method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopeFilenameForArrayConstraintFromSetEnvelopeFilename(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $envelopeInfoTypeEnvelopeFilenameItem) {
            // validation for constraint: itemType
            if (!is_string($envelopeInfoTypeEnvelopeFilenameItem)) {
                $invalidValues[] = is_object($envelopeInfoTypeEnvelopeFilenameItem) ? get_class($envelopeInfoTypeEnvelopeFilenameItem) : sprintf('%s(%s)', gettype($envelopeInfoTypeEnvelopeFilenameItem), var_export($envelopeInfoTypeEnvelopeFilenameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The envelopeFilename property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set envelopeFilename value
     * @throws InvalidArgumentException
     * @param string[] $envelopeFilename
     * @return \PocztaPolska\StructType\EnvelopeInfoType
     */
    public function setEnvelopeFilename(?array $envelopeFilename = null): self
    {
        // validation for constraint: array
        if ('' !== ($envelopeFilenameArrayErrorMessage = self::validateEnvelopeFilenameForArrayConstraintFromSetEnvelopeFilename($envelopeFilename))) {
            throw new InvalidArgumentException($envelopeFilenameArrayErrorMessage, __LINE__);
        }
        $this->envelopeFilename = $envelopeFilename;
        
        return $this;
    }
    /**
     * Add item to envelopeFilename value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\EnvelopeInfoType
     */
    public function addToEnvelopeFilename(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The envelopeFilename property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->envelopeFilename[] = $item;
        
        return $this;
    }
    /**
     * Get idEnvelope value
     * @return int|null
     */
    public function getIdEnvelope(): ?int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \PocztaPolska\StructType\EnvelopeInfoType
     */
    public function setIdEnvelope(?int $idEnvelope = null): self
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
    /**
     * Get envelopeStatus value
     * @return string|null
     */
    public function getEnvelopeStatus(): ?string
    {
        return $this->envelopeStatus;
    }
    /**
     * Set envelopeStatus value
     * @uses \PocztaPolska\EnumType\EnvelopeStatusType::valueIsValid()
     * @uses \PocztaPolska\EnumType\EnvelopeStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $envelopeStatus
     * @return \PocztaPolska\StructType\EnvelopeInfoType
     */
    public function setEnvelopeStatus(?string $envelopeStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\EnvelopeStatusType::valueIsValid($envelopeStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\EnvelopeStatusType', is_array($envelopeStatus) ? implode(', ', $envelopeStatus) : var_export($envelopeStatus, true), implode(', ', \PocztaPolska\EnumType\EnvelopeStatusType::getValidValues())), __LINE__);
        }
        $this->envelopeStatus = $envelopeStatus;
        
        return $this;
    }
    /**
     * Get dataTransmisji value
     * @return string|null
     */
    public function getDataTransmisji(): ?string
    {
        return $this->dataTransmisji;
    }
    /**
     * Set dataTransmisji value
     * @param string $dataTransmisji
     * @return \PocztaPolska\StructType\EnvelopeInfoType
     */
    public function setDataTransmisji(?string $dataTransmisji = null): self
    {
        // validation for constraint: string
        if (!is_null($dataTransmisji) && !is_string($dataTransmisji)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataTransmisji, true), gettype($dataTransmisji)), __LINE__);
        }
        $this->dataTransmisji = $dataTransmisji;
        
        return $this;
    }
}
