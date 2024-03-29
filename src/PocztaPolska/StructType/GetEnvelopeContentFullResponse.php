<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeContentFullResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeContentFullResponse extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PrzesylkaFullType[]
     */
    protected ?array $przesylka = null;

    /**
     * Constructor method for getEnvelopeContentFullResponse
     * @uses GetEnvelopeContentFullResponse::setPrzesylka()
     * @param \PocztaPolska\StructType\PrzesylkaFullType[] $przesylka
     */
    public function __construct(?array $przesylka = null)
    {
        $this
            ->setPrzesylka($przesylka);
    }

    /**
     * Get przesylka value
     * @return \PocztaPolska\StructType\PrzesylkaFullType[]
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
        foreach ($values as $getEnvelopeContentFullResponsePrzesylkaItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeContentFullResponsePrzesylkaItem instanceof \PocztaPolska\StructType\PrzesylkaFullType) {
                $invalidValues[] = is_object($getEnvelopeContentFullResponsePrzesylkaItem) ? get_class($getEnvelopeContentFullResponsePrzesylkaItem) : sprintf('%s(%s)', gettype($getEnvelopeContentFullResponsePrzesylkaItem), var_export($getEnvelopeContentFullResponsePrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \PocztaPolska\StructType\PrzesylkaFullType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set przesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\PrzesylkaFullType[] $przesylka
     * @return \PocztaPolska\StructType\GetEnvelopeContentFullResponse
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
     * @param \PocztaPolska\StructType\PrzesylkaFullType $item
     * @return \PocztaPolska\StructType\GetEnvelopeContentFullResponse
     */
    public function addToPrzesylka(\PocztaPolska\StructType\PrzesylkaFullType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\PrzesylkaFullType) {
            throw new InvalidArgumentException(sprintf('The przesylka property can only contain items of type \PocztaPolska\StructType\PrzesylkaFullType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;

        return $this;
    }
}
