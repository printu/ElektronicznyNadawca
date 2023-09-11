<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBuforListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeBuforListResponse extends AbstractStructBase
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\BuforType[]
     */
    protected ?array $bufor = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;

    /**
     * Constructor method for getEnvelopeBuforListResponse
     * @uses GetEnvelopeBuforListResponse::setBufor()
     * @uses GetEnvelopeBuforListResponse::setError()
     * @param \PocztaPolska\StructType\BuforType[] $bufor
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $bufor = null, ?array $error = null)
    {
        $this
            ->setBufor($bufor)
            ->setError($error);
    }

    /**
     * Get bufor value
     * @return \PocztaPolska\StructType\BuforType[]
     */
    public function getBufor(): ?array
    {
        return $this->bufor;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBufor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuforForArrayConstraintFromSetBufor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeBuforListResponseBuforItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforListResponseBuforItem instanceof \PocztaPolska\StructType\BuforType) {
                $invalidValues[] = is_object($getEnvelopeBuforListResponseBuforItem) ? get_class($getEnvelopeBuforListResponseBuforItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforListResponseBuforItem), var_export($getEnvelopeBuforListResponseBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bufor property can only contain items of type \PocztaPolska\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set bufor value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\BuforType[] $bufor
     * @return \PocztaPolska\StructType\GetEnvelopeBuforListResponse
     */
    public function setBufor(?array $bufor = null): self
    {
        // validation for constraint: array
        if ('' !== ($buforArrayErrorMessage = self::validateBuforForArrayConstraintFromSetBufor($bufor))) {
            throw new InvalidArgumentException($buforArrayErrorMessage, __LINE__);
        }
        $this->bufor = $bufor;

        return $this;
    }

    /**
     * Add item to bufor value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\BuforType $item
     * @return \PocztaPolska\StructType\GetEnvelopeBuforListResponse
     */
    public function addToBufor(\PocztaPolska\StructType\BuforType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\BuforType) {
            throw new InvalidArgumentException(sprintf('The bufor property can only contain items of type \PocztaPolska\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bufor[] = $item;

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
        foreach ($values as $getEnvelopeBuforListResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforListResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getEnvelopeBuforListResponseErrorItem) ? get_class($getEnvelopeBuforListResponseErrorItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforListResponseErrorItem), var_export($getEnvelopeBuforListResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetEnvelopeBuforListResponse
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
     * @return \PocztaPolska\StructType\GetEnvelopeBuforListResponse
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
