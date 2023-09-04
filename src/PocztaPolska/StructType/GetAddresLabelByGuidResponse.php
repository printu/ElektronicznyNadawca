<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddresLabelByGuidResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAddresLabelByGuidResponse extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AddressLabelContent[]
     */
    protected ?array $content = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;

    /**
     * Constructor method for getAddresLabelByGuidResponse
     * @uses GetAddresLabelByGuidResponse::setContent()
     * @uses GetAddresLabelByGuidResponse::setError()
     * @param \PocztaPolska\StructType\AddressLabelContent[] $content
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $content = null, ?array $error = null)
    {
        $this
            ->setContent($content)
            ->setError($error);
    }

    /**
     * Get content value
     * @return \PocztaPolska\StructType\AddressLabelContent[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContentForArrayConstraintFromSetContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAddresLabelByGuidResponseContentItem) {
            // validation for constraint: itemType
            if (!$getAddresLabelByGuidResponseContentItem instanceof \PocztaPolska\StructType\AddressLabelContent) {
                $invalidValues[] = is_object($getAddresLabelByGuidResponseContentItem) ? get_class($getAddresLabelByGuidResponseContentItem) : sprintf('%s(%s)', gettype($getAddresLabelByGuidResponseContentItem), var_export($getAddresLabelByGuidResponseContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The content property can only contain items of type \PocztaPolska\StructType\AddressLabelContent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set content value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\AddressLabelContent[] $content
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidResponse
     */
    public function setContent(?array $content = null): self
    {
        // validation for constraint: array
        if ('' !== ($contentArrayErrorMessage = self::validateContentForArrayConstraintFromSetContent($content))) {
            throw new InvalidArgumentException($contentArrayErrorMessage, __LINE__);
        }
        $this->content = $content;

        return $this;
    }

    /**
     * Add item to content value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\AddressLabelContent $item
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidResponse
     */
    public function addToContent(\PocztaPolska\StructType\AddressLabelContent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\AddressLabelContent) {
            throw new InvalidArgumentException(sprintf('The content property can only contain items of type \PocztaPolska\StructType\AddressLabelContent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->content[] = $item;

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
        foreach ($values as $getAddresLabelByGuidResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getAddresLabelByGuidResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getAddresLabelByGuidResponseErrorItem) ? get_class($getAddresLabelByGuidResponseErrorItem) : sprintf('%s(%s)', gettype($getAddresLabelByGuidResponseErrorItem), var_export($getAddresLabelByGuidResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidResponse
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
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidResponse
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
