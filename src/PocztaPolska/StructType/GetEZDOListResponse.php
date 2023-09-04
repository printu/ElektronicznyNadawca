<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDOListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEZDOListResponse extends AbstractStructBase
{
    /**
     * The EZDOPakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\EZDOPakietType[]
     */
    protected ?array $EZDOPakiet = null;
    /**
     * Constructor method for getEZDOListResponse
     * @uses GetEZDOListResponse::setEZDOPakiet()
     * @param \PocztaPolska\StructType\EZDOPakietType[] $eZDOPakiet
     */
    public function __construct(?array $eZDOPakiet = null)
    {
        $this
            ->setEZDOPakiet($eZDOPakiet);
    }
    /**
     * Get EZDOPakiet value
     * @return \PocztaPolska\StructType\EZDOPakietType[]
     */
    public function getEZDOPakiet(): ?array
    {
        return $this->EZDOPakiet;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEZDOPakiet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEZDOPakiet method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEZDOPakietForArrayConstraintFromSetEZDOPakiet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEZDOListResponseEZDOPakietItem) {
            // validation for constraint: itemType
            if (!$getEZDOListResponseEZDOPakietItem instanceof \PocztaPolska\StructType\EZDOPakietType) {
                $invalidValues[] = is_object($getEZDOListResponseEZDOPakietItem) ? get_class($getEZDOListResponseEZDOPakietItem) : sprintf('%s(%s)', gettype($getEZDOListResponseEZDOPakietItem), var_export($getEZDOListResponseEZDOPakietItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EZDOPakiet property can only contain items of type \PocztaPolska\StructType\EZDOPakietType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EZDOPakiet value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\EZDOPakietType[] $eZDOPakiet
     * @return \PocztaPolska\StructType\GetEZDOListResponse
     */
    public function setEZDOPakiet(?array $eZDOPakiet = null): self
    {
        // validation for constraint: array
        if ('' !== ($eZDOPakietArrayErrorMessage = self::validateEZDOPakietForArrayConstraintFromSetEZDOPakiet($eZDOPakiet))) {
            throw new InvalidArgumentException($eZDOPakietArrayErrorMessage, __LINE__);
        }
        $this->EZDOPakiet = $eZDOPakiet;
        
        return $this;
    }
    /**
     * Add item to EZDOPakiet value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\EZDOPakietType $item
     * @return \PocztaPolska\StructType\GetEZDOListResponse
     */
    public function addToEZDOPakiet(\PocztaPolska\StructType\EZDOPakietType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\EZDOPakietType) {
            throw new InvalidArgumentException(sprintf('The EZDOPakiet property can only contain items of type \PocztaPolska\StructType\EZDOPakietType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EZDOPakiet[] = $item;
        
        return $this;
    }
}
