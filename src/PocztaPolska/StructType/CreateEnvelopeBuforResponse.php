<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createEnvelopeBuforResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateEnvelopeBuforResponse extends AbstractStructBase
{
    /**
     * The createdBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\BuforType[]
     */
    protected ?array $createdBufor = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;

    /**
     * Constructor method for createEnvelopeBuforResponse
     * @uses CreateEnvelopeBuforResponse::setCreatedBufor()
     * @uses CreateEnvelopeBuforResponse::setError()
     * @param \PocztaPolska\StructType\BuforType[] $createdBufor
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $createdBufor = null, ?array $error = null)
    {
        $this
            ->setCreatedBufor($createdBufor)
            ->setError($error);
    }

    /**
     * Get createdBufor value
     * @return \PocztaPolska\StructType\BuforType[]
     */
    public function getCreatedBufor(): ?array
    {
        return $this->createdBufor;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCreatedBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreatedBufor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreatedBuforForArrayConstraintFromSetCreatedBufor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createEnvelopeBuforResponseCreatedBuforItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforResponseCreatedBuforItem instanceof \PocztaPolska\StructType\BuforType) {
                $invalidValues[] = is_object($createEnvelopeBuforResponseCreatedBuforItem) ? get_class($createEnvelopeBuforResponseCreatedBuforItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforResponseCreatedBuforItem), var_export($createEnvelopeBuforResponseCreatedBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The createdBufor property can only contain items of type \PocztaPolska\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set createdBufor value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\BuforType[] $createdBufor
     * @return \PocztaPolska\StructType\CreateEnvelopeBuforResponse
     */
    public function setCreatedBufor(?array $createdBufor = null): self
    {
        // validation for constraint: array
        if ('' !== ($createdBuforArrayErrorMessage = self::validateCreatedBuforForArrayConstraintFromSetCreatedBufor($createdBufor))) {
            throw new InvalidArgumentException($createdBuforArrayErrorMessage, __LINE__);
        }
        $this->createdBufor = $createdBufor;

        return $this;
    }

    /**
     * Add item to createdBufor value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\BuforType $item
     * @return \PocztaPolska\StructType\CreateEnvelopeBuforResponse
     */
    public function addToCreatedBufor(\PocztaPolska\StructType\BuforType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\BuforType) {
            throw new InvalidArgumentException(sprintf('The createdBufor property can only contain items of type \PocztaPolska\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->createdBufor[] = $item;

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
        foreach ($values as $createEnvelopeBuforResponseErrorItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($createEnvelopeBuforResponseErrorItem) ? get_class($createEnvelopeBuforResponseErrorItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforResponseErrorItem), var_export($createEnvelopeBuforResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\CreateEnvelopeBuforResponse
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
     * @return \PocztaPolska\StructType\CreateEnvelopeBuforResponse
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
