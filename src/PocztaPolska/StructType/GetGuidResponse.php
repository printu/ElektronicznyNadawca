<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGuidResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGuidResponse extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 100
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string[]
     */
    protected array $guid;
    /**
     * Constructor method for getGuidResponse
     * @uses GetGuidResponse::setGuid()
     * @param string[] $guid
     */
    public function __construct(array $guid)
    {
        $this
            ->setGuid($guid);
    }
    /**
     * Get guid value
     * @return string[]
     */
    public function getGuid(): array
    {
        return $this->guid;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGuid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuid method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuidForArrayConstraintFromSetGuid(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGuidResponseGuidItem) {
            // validation for constraint: itemType
            if (!is_string($getGuidResponseGuidItem)) {
                $invalidValues[] = is_object($getGuidResponseGuidItem) ? get_class($getGuidResponseGuidItem) : sprintf('%s(%s)', gettype($getGuidResponseGuidItem), var_export($getGuidResponseGuidItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The guid property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGuid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuid method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuidForLengthConstraintFromSetGuid(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $getGuidResponseGuidItem) {
            // validation for constraint: length(32)
            if (mb_strlen((string) $getGuidResponseGuidItem) !== 32) {
                $invalidValues[] = var_export($getGuidResponseGuidItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 32', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set guid value
     * @throws InvalidArgumentException
     * @param string[] $guid
     * @return \PocztaPolska\StructType\GetGuidResponse
     */
    public function setGuid(array $guid): self
    {
        // validation for constraint: array
        if ('' !== ($guidArrayErrorMessage = self::validateGuidForArrayConstraintFromSetGuid($guid))) {
            throw new InvalidArgumentException($guidArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(32)
        if ('' !== ($guidLengthErrorMessage = self::validateGuidForLengthConstraintFromSetGuid($guid))) {
            throw new InvalidArgumentException($guidLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($guid) && count($guid) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Add item to guid value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\GetGuidResponse
     */
    public function addToGuid(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The guid property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(32)
        if (mb_strlen((string) $item) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->guid) && count($this->guid) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->guid)), __LINE__);
        }
        $this->guid[] = $item;
        
        return $this;
    }
}
