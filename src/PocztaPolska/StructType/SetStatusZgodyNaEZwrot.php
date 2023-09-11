<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setStatusZgodyNaEZwrot StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetStatusZgodyNaEZwrot extends AbstractStructBase
{
    /**
     * The statusZgody
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\StatusZgodyEZwrotType[]
     */
    protected array $statusZgody;

    /**
     * Constructor method for setStatusZgodyNaEZwrot
     * @uses SetStatusZgodyNaEZwrot::setStatusZgody()
     * @param \PocztaPolska\StructType\StatusZgodyEZwrotType[] $statusZgody
     */
    public function __construct(array $statusZgody)
    {
        $this
            ->setStatusZgody($statusZgody);
    }

    /**
     * Get statusZgody value
     * @return \PocztaPolska\StructType\StatusZgodyEZwrotType[]
     */
    public function getStatusZgody(): array
    {
        return $this->statusZgody;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setStatusZgody method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatusZgody method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatusZgodyForArrayConstraintFromSetStatusZgody(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setStatusZgodyNaEZwrotStatusZgodyItem) {
            // validation for constraint: itemType
            if (!$setStatusZgodyNaEZwrotStatusZgodyItem instanceof \PocztaPolska\StructType\StatusZgodyEZwrotType) {
                $invalidValues[] = is_object($setStatusZgodyNaEZwrotStatusZgodyItem) ? get_class($setStatusZgodyNaEZwrotStatusZgodyItem) : sprintf('%s(%s)', gettype($setStatusZgodyNaEZwrotStatusZgodyItem), var_export($setStatusZgodyNaEZwrotStatusZgodyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The statusZgody property can only contain items of type \PocztaPolska\StructType\StatusZgodyEZwrotType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set statusZgody value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\StatusZgodyEZwrotType[] $statusZgody
     * @return \PocztaPolska\StructType\SetStatusZgodyNaEZwrot
     */
    public function setStatusZgody(array $statusZgody): self
    {
        // validation for constraint: array
        if ('' !== ($statusZgodyArrayErrorMessage = self::validateStatusZgodyForArrayConstraintFromSetStatusZgody($statusZgody))) {
            throw new InvalidArgumentException($statusZgodyArrayErrorMessage, __LINE__);
        }
        $this->statusZgody = $statusZgody;

        return $this;
    }

    /**
     * Add item to statusZgody value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\StatusZgodyEZwrotType $item
     * @return \PocztaPolska\StructType\SetStatusZgodyNaEZwrot
     */
    public function addToStatusZgody(\PocztaPolska\StructType\StatusZgodyEZwrotType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\StatusZgodyEZwrotType) {
            throw new InvalidArgumentException(sprintf('The statusZgody property can only contain items of type \PocztaPolska\StructType\StatusZgodyEZwrotType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->statusZgody[] = $item;

        return $this;
    }
}
