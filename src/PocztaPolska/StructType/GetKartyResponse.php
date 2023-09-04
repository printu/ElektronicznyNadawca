<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKartyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKartyResponse extends AbstractStructBase
{
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\KartaType[]
     */
    protected ?array $karta = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getKartyResponse
     * @uses GetKartyResponse::setKarta()
     * @uses GetKartyResponse::setError()
     * @param \PocztaPolska\StructType\KartaType[] $karta
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $karta = null, ?array $error = null)
    {
        $this
            ->setKarta($karta)
            ->setError($error);
    }
    /**
     * Get karta value
     * @return \PocztaPolska\StructType\KartaType[]
     */
    public function getKarta(): ?array
    {
        return $this->karta;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKarta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKarta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKartaForArrayConstraintFromSetKarta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKartyResponseKartaItem) {
            // validation for constraint: itemType
            if (!$getKartyResponseKartaItem instanceof \PocztaPolska\StructType\KartaType) {
                $invalidValues[] = is_object($getKartyResponseKartaItem) ? get_class($getKartyResponseKartaItem) : sprintf('%s(%s)', gettype($getKartyResponseKartaItem), var_export($getKartyResponseKartaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The karta property can only contain items of type \PocztaPolska\StructType\KartaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set karta value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\KartaType[] $karta
     * @return \PocztaPolska\StructType\GetKartyResponse
     */
    public function setKarta(?array $karta = null): self
    {
        // validation for constraint: array
        if ('' !== ($kartaArrayErrorMessage = self::validateKartaForArrayConstraintFromSetKarta($karta))) {
            throw new InvalidArgumentException($kartaArrayErrorMessage, __LINE__);
        }
        $this->karta = $karta;
        
        return $this;
    }
    /**
     * Add item to karta value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\KartaType $item
     * @return \PocztaPolska\StructType\GetKartyResponse
     */
    public function addToKarta(\PocztaPolska\StructType\KartaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\KartaType) {
            throw new InvalidArgumentException(sprintf('The karta property can only contain items of type \PocztaPolska\StructType\KartaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->karta[] = $item;
        
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
        foreach ($values as $getKartyResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKartyResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getKartyResponseErrorItem) ? get_class($getKartyResponseErrorItem) : sprintf('%s(%s)', gettype($getKartyResponseErrorItem), var_export($getKartyResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetKartyResponse
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
     * @return \PocztaPolska\StructType\GetKartyResponse
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
