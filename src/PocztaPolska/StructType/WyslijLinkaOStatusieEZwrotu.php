<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wyslijLinkaOStatusieEZwrotu StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WyslijLinkaOStatusieEZwrotu extends AbstractStructBase
{
    /**
     * The guidZgodaEZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string[]
     */
    protected array $guidZgodaEZwrot;

    /**
     * Constructor method for wyslijLinkaOStatusieEZwrotu
     * @uses WyslijLinkaOStatusieEZwrotu::setGuidZgodaEZwrot()
     * @param string[] $guidZgodaEZwrot
     */
    public function __construct(array $guidZgodaEZwrot)
    {
        $this
            ->setGuidZgodaEZwrot($guidZgodaEZwrot);
    }

    /**
     * Get guidZgodaEZwrot value
     * @return string[]
     */
    public function getGuidZgodaEZwrot(): array
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setGuidZgodaEZwrot method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuidZgodaEZwrot method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuidZgodaEZwrotForArrayConstraintFromSetGuidZgodaEZwrot(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem) {
            // validation for constraint: itemType
            if (!is_string($wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem)) {
                $invalidValues[] = is_object($wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem) ? get_class($wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem) : sprintf('%s(%s)', gettype($wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem), var_export($wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The guidZgodaEZwrot property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setGuidZgodaEZwrot method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuidZgodaEZwrot method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuidZgodaEZwrotForLengthConstraintFromSetGuidZgodaEZwrot(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem) {
            // validation for constraint: length(32)
            if (mb_strlen((string) $wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem) !== 32) {
                $invalidValues[] = var_export($wyslijLinkaOStatusieEZwrotuGuidZgodaEZwrotItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 32', implode(', ', $invalidValues));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set guidZgodaEZwrot value
     * @throws InvalidArgumentException
     * @param string[] $guidZgodaEZwrot
     * @return \PocztaPolska\StructType\WyslijLinkaOStatusieEZwrotu
     */
    public function setGuidZgodaEZwrot(array $guidZgodaEZwrot): self
    {
        // validation for constraint: array
        if ('' !== ($guidZgodaEZwrotArrayErrorMessage = self::validateGuidZgodaEZwrotForArrayConstraintFromSetGuidZgodaEZwrot($guidZgodaEZwrot))) {
            throw new InvalidArgumentException($guidZgodaEZwrotArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(32)
        if ('' !== ($guidZgodaEZwrotLengthErrorMessage = self::validateGuidZgodaEZwrotForLengthConstraintFromSetGuidZgodaEZwrot($guidZgodaEZwrot))) {
            throw new InvalidArgumentException($guidZgodaEZwrotLengthErrorMessage, __LINE__);
        }
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;

        return $this;
    }

    /**
     * Add item to guidZgodaEZwrot value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\WyslijLinkaOStatusieEZwrotu
     */
    public function addToGuidZgodaEZwrot(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The guidZgodaEZwrot property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(32)
        if (mb_strlen((string) $item) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $item)), __LINE__);
        }
        $this->guidZgodaEZwrot[] = $item;

        return $this;
    }
}
