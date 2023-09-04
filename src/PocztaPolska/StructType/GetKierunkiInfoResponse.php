<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunkiInfoResponse extends AbstractStructBase
{
    /**
     * The lastUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $lastUpdate;
    /**
     * The usluga
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\UslugiType[]
     */
    protected array $usluga;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getKierunkiInfoResponse
     * @uses GetKierunkiInfoResponse::setLastUpdate()
     * @uses GetKierunkiInfoResponse::setUsluga()
     * @uses GetKierunkiInfoResponse::setError()
     * @param string $lastUpdate
     * @param \PocztaPolska\StructType\UslugiType[] $usluga
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(string $lastUpdate, array $usluga, ?array $error = null)
    {
        $this
            ->setLastUpdate($lastUpdate)
            ->setUsluga($usluga)
            ->setError($error);
    }
    /**
     * Get lastUpdate value
     * @return string
     */
    public function getLastUpdate(): string
    {
        return $this->lastUpdate;
    }
    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \PocztaPolska\StructType\GetKierunkiInfoResponse
     */
    public function setLastUpdate(string $lastUpdate): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdate, true), gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;
        
        return $this;
    }
    /**
     * Get usluga value
     * @return \PocztaPolska\StructType\UslugiType[]
     */
    public function getUsluga(): array
    {
        return $this->usluga;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUsluga method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsluga method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUslugaForArrayConstraintFromSetUsluga(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiInfoResponseUslugaItem) {
            // validation for constraint: itemType
            if (!$getKierunkiInfoResponseUslugaItem instanceof \PocztaPolska\StructType\UslugiType) {
                $invalidValues[] = is_object($getKierunkiInfoResponseUslugaItem) ? get_class($getKierunkiInfoResponseUslugaItem) : sprintf('%s(%s)', gettype($getKierunkiInfoResponseUslugaItem), var_export($getKierunkiInfoResponseUslugaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The usluga property can only contain items of type \PocztaPolska\StructType\UslugiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set usluga value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\UslugiType[] $usluga
     * @return \PocztaPolska\StructType\GetKierunkiInfoResponse
     */
    public function setUsluga(array $usluga): self
    {
        // validation for constraint: array
        if ('' !== ($uslugaArrayErrorMessage = self::validateUslugaForArrayConstraintFromSetUsluga($usluga))) {
            throw new InvalidArgumentException($uslugaArrayErrorMessage, __LINE__);
        }
        $this->usluga = $usluga;
        
        return $this;
    }
    /**
     * Add item to usluga value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\UslugiType $item
     * @return \PocztaPolska\StructType\GetKierunkiInfoResponse
     */
    public function addToUsluga(\PocztaPolska\StructType\UslugiType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\UslugiType) {
            throw new InvalidArgumentException(sprintf('The usluga property can only contain items of type \PocztaPolska\StructType\UslugiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->usluga[] = $item;
        
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
        foreach ($values as $getKierunkiInfoResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKierunkiInfoResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getKierunkiInfoResponseErrorItem) ? get_class($getKierunkiInfoResponseErrorItem) : sprintf('%s(%s)', gettype($getKierunkiInfoResponseErrorItem), var_export($getKierunkiInfoResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetKierunkiInfoResponse
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
     * @return \PocztaPolska\StructType\GetKierunkiInfoResponse
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
