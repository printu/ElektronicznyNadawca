<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBuforResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeBuforResponse extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PrzesylkaType[]
     */
    protected ?array $przesylka = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getEnvelopeBuforResponse
     * @uses GetEnvelopeBuforResponse::setPrzesylka()
     * @uses GetEnvelopeBuforResponse::setError()
     * @param \PocztaPolska\StructType\PrzesylkaType[] $przesylka
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $przesylka = null, ?array $error = null)
    {
        $this
            ->setPrzesylka($przesylka)
            ->setError($error);
    }
    /**
     * Get przesylka value
     * @return \PocztaPolska\StructType\PrzesylkaType[]
     */
    public function getPrzesylka(): ?array
    {
        return $this->przesylka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkaForArrayConstraintFromSetPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeBuforResponsePrzesylkaItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforResponsePrzesylkaItem instanceof \PocztaPolska\StructType\PrzesylkaType) {
                $invalidValues[] = is_object($getEnvelopeBuforResponsePrzesylkaItem) ? get_class($getEnvelopeBuforResponsePrzesylkaItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforResponsePrzesylkaItem), var_export($getEnvelopeBuforResponsePrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \PocztaPolska\StructType\PrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set przesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\PrzesylkaType[] $przesylka
     * @return \PocztaPolska\StructType\GetEnvelopeBuforResponse
     */
    public function setPrzesylka(?array $przesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($przesylkaArrayErrorMessage = self::validatePrzesylkaForArrayConstraintFromSetPrzesylka($przesylka))) {
            throw new InvalidArgumentException($przesylkaArrayErrorMessage, __LINE__);
        }
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Add item to przesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\PrzesylkaType $item
     * @return \PocztaPolska\StructType\GetEnvelopeBuforResponse
     */
    public function addToPrzesylka(\PocztaPolska\StructType\PrzesylkaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\PrzesylkaType) {
            throw new InvalidArgumentException(sprintf('The przesylka property can only contain items of type \PocztaPolska\StructType\PrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;
        
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
        foreach ($values as $getEnvelopeBuforResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getEnvelopeBuforResponseErrorItem) ? get_class($getEnvelopeBuforResponseErrorItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforResponseErrorItem), var_export($getEnvelopeBuforResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetEnvelopeBuforResponse
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
     * @return \PocztaPolska\StructType\GetEnvelopeBuforResponse
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
