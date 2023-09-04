<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWplatyCKPResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWplatyCKPResponse extends AbstractStructBase
{
    /**
     * The wplaty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\WplataCKPType[]
     */
    protected ?array $wplaty = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getWplatyCKPResponse
     * @uses GetWplatyCKPResponse::setWplaty()
     * @uses GetWplatyCKPResponse::setError()
     * @param \PocztaPolska\StructType\WplataCKPType[] $wplaty
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $wplaty = null, ?array $error = null)
    {
        $this
            ->setWplaty($wplaty)
            ->setError($error);
    }
    /**
     * Get wplaty value
     * @return \PocztaPolska\StructType\WplataCKPType[]
     */
    public function getWplaty(): ?array
    {
        return $this->wplaty;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setWplaty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWplaty method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWplatyForArrayConstraintFromSetWplaty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWplatyCKPResponseWplatyItem) {
            // validation for constraint: itemType
            if (!$getWplatyCKPResponseWplatyItem instanceof \PocztaPolska\StructType\WplataCKPType) {
                $invalidValues[] = is_object($getWplatyCKPResponseWplatyItem) ? get_class($getWplatyCKPResponseWplatyItem) : sprintf('%s(%s)', gettype($getWplatyCKPResponseWplatyItem), var_export($getWplatyCKPResponseWplatyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The wplaty property can only contain items of type \PocztaPolska\StructType\WplataCKPType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set wplaty value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\WplataCKPType[] $wplaty
     * @return \PocztaPolska\StructType\GetWplatyCKPResponse
     */
    public function setWplaty(?array $wplaty = null): self
    {
        // validation for constraint: array
        if ('' !== ($wplatyArrayErrorMessage = self::validateWplatyForArrayConstraintFromSetWplaty($wplaty))) {
            throw new InvalidArgumentException($wplatyArrayErrorMessage, __LINE__);
        }
        $this->wplaty = $wplaty;
        
        return $this;
    }
    /**
     * Add item to wplaty value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\WplataCKPType $item
     * @return \PocztaPolska\StructType\GetWplatyCKPResponse
     */
    public function addToWplaty(\PocztaPolska\StructType\WplataCKPType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\WplataCKPType) {
            throw new InvalidArgumentException(sprintf('The wplaty property can only contain items of type \PocztaPolska\StructType\WplataCKPType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->wplaty[] = $item;
        
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
        foreach ($values as $getWplatyCKPResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getWplatyCKPResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getWplatyCKPResponseErrorItem) ? get_class($getWplatyCKPResponseErrorItem) : sprintf('%s(%s)', gettype($getWplatyCKPResponseErrorItem), var_export($getWplatyCKPResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetWplatyCKPResponse
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
     * @return \PocztaPolska\StructType\GetWplatyCKPResponse
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
