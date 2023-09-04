<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendEnvelopeResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendEnvelopeResponseType extends AbstractStructBase
{
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idEnvelope = null;
    /**
     * The envelopeStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $envelopeStatus = null;
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
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $envelopeFilename = null;
    /**
     * Constructor method for sendEnvelopeResponseType
     * @uses SendEnvelopeResponseType::setIdEnvelope()
     * @uses SendEnvelopeResponseType::setEnvelopeStatus()
     * @uses SendEnvelopeResponseType::setError()
     * @uses SendEnvelopeResponseType::setEnvelopeFilename()
     * @param int $idEnvelope
     * @param string $envelopeStatus
     * @param \PocztaPolska\StructType\ErrorType[] $error
     * @param string $envelopeFilename
     */
    public function __construct(?int $idEnvelope = null, ?string $envelopeStatus = null, ?array $error = null, ?string $envelopeFilename = null)
    {
        $this
            ->setIdEnvelope($idEnvelope)
            ->setEnvelopeStatus($envelopeStatus)
            ->setError($error)
            ->setEnvelopeFilename($envelopeFilename);
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
     * @return \PocztaPolska\StructType\SendEnvelopeResponseType
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
     * @return \PocztaPolska\StructType\SendEnvelopeResponseType
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
        foreach ($values as $sendEnvelopeResponseTypeErrorItem) {
            // validation for constraint: itemType
            if (!$sendEnvelopeResponseTypeErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($sendEnvelopeResponseTypeErrorItem) ? get_class($sendEnvelopeResponseTypeErrorItem) : sprintf('%s(%s)', gettype($sendEnvelopeResponseTypeErrorItem), var_export($sendEnvelopeResponseTypeErrorItem, true));
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
     * @return \PocztaPolska\StructType\SendEnvelopeResponseType
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
     * @return \PocztaPolska\StructType\SendEnvelopeResponseType
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
     * @return string|null
     */
    public function getEnvelopeFilename(): ?string
    {
        return $this->envelopeFilename;
    }
    /**
     * Set envelopeFilename value
     * @param string $envelopeFilename
     * @return \PocztaPolska\StructType\SendEnvelopeResponseType
     */
    public function setEnvelopeFilename(?string $envelopeFilename = null): self
    {
        // validation for constraint: string
        if (!is_null($envelopeFilename) && !is_string($envelopeFilename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeFilename, true), gettype($envelopeFilename)), __LINE__);
        }
        $this->envelopeFilename = $envelopeFilename;
        
        return $this;
    }
}
