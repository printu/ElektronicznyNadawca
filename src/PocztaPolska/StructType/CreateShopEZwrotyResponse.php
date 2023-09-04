<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createShopEZwrotyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateShopEZwrotyResponse extends AbstractStructBase
{
    /**
     * The idShop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idShop = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;

    /**
     * Constructor method for createShopEZwrotyResponse
     * @uses CreateShopEZwrotyResponse::setIdShop()
     * @uses CreateShopEZwrotyResponse::setError()
     * @param int $idShop
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?int $idShop = null, ?array $error = null)
    {
        $this
            ->setIdShop($idShop)
            ->setError($error);
    }

    /**
     * Get idShop value
     * @return int|null
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    /**
     * Set idShop value
     * @param int $idShop
     * @return \PocztaPolska\StructType\CreateShopEZwrotyResponse
     */
    public function setIdShop(?int $idShop = null): self
    {
        // validation for constraint: int
        if (!is_null($idShop) && !(is_int($idShop) || ctype_digit($idShop))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idShop, true), gettype($idShop)), __LINE__);
        }
        $this->idShop = $idShop;

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
        foreach ($values as $createShopEZwrotyResponseErrorItem) {
            // validation for constraint: itemType
            if (!$createShopEZwrotyResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($createShopEZwrotyResponseErrorItem) ? get_class($createShopEZwrotyResponseErrorItem) : sprintf('%s(%s)', gettype($createShopEZwrotyResponseErrorItem), var_export($createShopEZwrotyResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\CreateShopEZwrotyResponse
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
     * @return \PocztaPolska\StructType\CreateShopEZwrotyResponse
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
