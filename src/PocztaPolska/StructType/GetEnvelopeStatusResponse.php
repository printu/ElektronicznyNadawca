<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeStatusResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeStatusResponse extends AbstractStructBase
{
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
     * Constructor method for getEnvelopeStatusResponse
     * @uses GetEnvelopeStatusResponse::setEnvelopeStatus()
     * @uses GetEnvelopeStatusResponse::setError()
     * @param string $envelopeStatus
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?string $envelopeStatus = null, ?array $error = null)
    {
        $this
            ->setEnvelopeStatus($envelopeStatus)
            ->setError($error);
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
     * @return \PocztaPolska\StructType\GetEnvelopeStatusResponse
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
        foreach ($values as $getEnvelopeStatusResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeStatusResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getEnvelopeStatusResponseErrorItem) ? get_class($getEnvelopeStatusResponseErrorItem) : sprintf('%s(%s)', gettype($getEnvelopeStatusResponseErrorItem), var_export($getEnvelopeStatusResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetEnvelopeStatusResponse
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
     * @return \PocztaPolska\StructType\GetEnvelopeStatusResponse
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
}
