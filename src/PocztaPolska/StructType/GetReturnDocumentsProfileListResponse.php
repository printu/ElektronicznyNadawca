<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReturnDocumentsProfileListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReturnDocumentsProfileListResponse extends AbstractStructBase
{
    /**
     * The profile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ReturnDocumentProfileType[]
     */
    protected ?array $profile = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getReturnDocumentsProfileListResponse
     * @uses GetReturnDocumentsProfileListResponse::setProfile()
     * @uses GetReturnDocumentsProfileListResponse::setError()
     * @param \PocztaPolska\StructType\ReturnDocumentProfileType[] $profile
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $profile = null, ?array $error = null)
    {
        $this
            ->setProfile($profile)
            ->setError($error);
    }
    /**
     * Get profile value
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType[]
     */
    public function getProfile(): ?array
    {
        return $this->profile;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfile method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfileForArrayConstraintFromSetProfile(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getReturnDocumentsProfileListResponseProfileItem) {
            // validation for constraint: itemType
            if (!$getReturnDocumentsProfileListResponseProfileItem instanceof \PocztaPolska\StructType\ReturnDocumentProfileType) {
                $invalidValues[] = is_object($getReturnDocumentsProfileListResponseProfileItem) ? get_class($getReturnDocumentsProfileListResponseProfileItem) : sprintf('%s(%s)', gettype($getReturnDocumentsProfileListResponseProfileItem), var_export($getReturnDocumentsProfileListResponseProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The profile property can only contain items of type \PocztaPolska\StructType\ReturnDocumentProfileType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set profile value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ReturnDocumentProfileType[] $profile
     * @return \PocztaPolska\StructType\GetReturnDocumentsProfileListResponse
     */
    public function setProfile(?array $profile = null): self
    {
        // validation for constraint: array
        if ('' !== ($profileArrayErrorMessage = self::validateProfileForArrayConstraintFromSetProfile($profile))) {
            throw new InvalidArgumentException($profileArrayErrorMessage, __LINE__);
        }
        $this->profile = $profile;
        
        return $this;
    }
    /**
     * Add item to profile value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ReturnDocumentProfileType $item
     * @return \PocztaPolska\StructType\GetReturnDocumentsProfileListResponse
     */
    public function addToProfile(\PocztaPolska\StructType\ReturnDocumentProfileType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ReturnDocumentProfileType) {
            throw new InvalidArgumentException(sprintf('The profile property can only contain items of type \PocztaPolska\StructType\ReturnDocumentProfileType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->profile[] = $item;
        
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
        foreach ($values as $getReturnDocumentsProfileListResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getReturnDocumentsProfileListResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getReturnDocumentsProfileListResponseErrorItem) ? get_class($getReturnDocumentsProfileListResponseErrorItem) : sprintf('%s(%s)', gettype($getReturnDocumentsProfileListResponseErrorItem), var_export($getReturnDocumentsProfileListResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetReturnDocumentsProfileListResponse
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
     * @return \PocztaPolska\StructType\GetReturnDocumentsProfileListResponse
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
