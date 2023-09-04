<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addOdwolanieDoReklamacjiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddOdwolanieDoReklamacjiResponse extends AbstractStructBase
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
     * The reklamacjaInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ReklamacjaInfoType[]
     */
    protected ?array $reklamacjaInfo = null;
    /**
     * Constructor method for addOdwolanieDoReklamacjiResponse
     * @uses AddOdwolanieDoReklamacjiResponse::setError()
     * @uses AddOdwolanieDoReklamacjiResponse::setReklamacjaInfo()
     * @param \PocztaPolska\StructType\ErrorType[] $error
     * @param \PocztaPolska\StructType\ReklamacjaInfoType[] $reklamacjaInfo
     */
    public function __construct(?array $error = null, ?array $reklamacjaInfo = null)
    {
        $this
            ->setError($error)
            ->setReklamacjaInfo($reklamacjaInfo);
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
        foreach ($values as $addOdwolanieDoReklamacjiResponseErrorItem) {
            // validation for constraint: itemType
            if (!$addOdwolanieDoReklamacjiResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($addOdwolanieDoReklamacjiResponseErrorItem) ? get_class($addOdwolanieDoReklamacjiResponseErrorItem) : sprintf('%s(%s)', gettype($addOdwolanieDoReklamacjiResponseErrorItem), var_export($addOdwolanieDoReklamacjiResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\AddOdwolanieDoReklamacjiResponse
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
     * @return \PocztaPolska\StructType\AddOdwolanieDoReklamacjiResponse
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
     * Get reklamacjaInfo value
     * @return \PocztaPolska\StructType\ReklamacjaInfoType[]
     */
    public function getReklamacjaInfo(): ?array
    {
        return $this->reklamacjaInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReklamacjaInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReklamacjaInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReklamacjaInfoForArrayConstraintFromSetReklamacjaInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) {
            // validation for constraint: itemType
            if (!$addOdwolanieDoReklamacjiResponseReklamacjaInfoItem instanceof \PocztaPolska\StructType\ReklamacjaInfoType) {
                $invalidValues[] = is_object($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) ? get_class($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) : sprintf('%s(%s)', gettype($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem), var_export($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reklamacjaInfo property can only contain items of type \PocztaPolska\StructType\ReklamacjaInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set reklamacjaInfo value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ReklamacjaInfoType[] $reklamacjaInfo
     * @return \PocztaPolska\StructType\AddOdwolanieDoReklamacjiResponse
     */
    public function setReklamacjaInfo(?array $reklamacjaInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($reklamacjaInfoArrayErrorMessage = self::validateReklamacjaInfoForArrayConstraintFromSetReklamacjaInfo($reklamacjaInfo))) {
            throw new InvalidArgumentException($reklamacjaInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($reklamacjaInfo) && count($reklamacjaInfo) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($reklamacjaInfo)), __LINE__);
        }
        $this->reklamacjaInfo = $reklamacjaInfo;
        
        return $this;
    }
    /**
     * Add item to reklamacjaInfo value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ReklamacjaInfoType $item
     * @return \PocztaPolska\StructType\AddOdwolanieDoReklamacjiResponse
     */
    public function addToReklamacjaInfo(\PocztaPolska\StructType\ReklamacjaInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ReklamacjaInfoType) {
            throw new InvalidArgumentException(sprintf('The reklamacjaInfo property can only contain items of type \PocztaPolska\StructType\ReklamacjaInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->reklamacjaInfo) && count($this->reklamacjaInfo) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->reklamacjaInfo)), __LINE__);
        }
        $this->reklamacjaInfo[] = $item;
        
        return $this;
    }
}
