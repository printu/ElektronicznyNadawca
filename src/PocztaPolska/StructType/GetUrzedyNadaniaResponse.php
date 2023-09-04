<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUrzedyNadaniaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUrzedyNadaniaResponse extends AbstractStructBase
{
    /**
     * The urzedyNadania
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\UrzadNadaniaFullType[]
     */
    protected ?array $urzedyNadania = null;
    /**
     * Constructor method for getUrzedyNadaniaResponse
     * @uses GetUrzedyNadaniaResponse::setUrzedyNadania()
     * @param \PocztaPolska\StructType\UrzadNadaniaFullType[] $urzedyNadania
     */
    public function __construct(?array $urzedyNadania = null)
    {
        $this
            ->setUrzedyNadania($urzedyNadania);
    }
    /**
     * Get urzedyNadania value
     * @return \PocztaPolska\StructType\UrzadNadaniaFullType[]
     */
    public function getUrzedyNadania(): ?array
    {
        return $this->urzedyNadania;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUrzedyNadania method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrzedyNadania method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrzedyNadaniaForArrayConstraintFromSetUrzedyNadania(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUrzedyNadaniaResponseUrzedyNadaniaItem) {
            // validation for constraint: itemType
            if (!$getUrzedyNadaniaResponseUrzedyNadaniaItem instanceof \PocztaPolska\StructType\UrzadNadaniaFullType) {
                $invalidValues[] = is_object($getUrzedyNadaniaResponseUrzedyNadaniaItem) ? get_class($getUrzedyNadaniaResponseUrzedyNadaniaItem) : sprintf('%s(%s)', gettype($getUrzedyNadaniaResponseUrzedyNadaniaItem), var_export($getUrzedyNadaniaResponseUrzedyNadaniaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The urzedyNadania property can only contain items of type \PocztaPolska\StructType\UrzadNadaniaFullType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set urzedyNadania value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\UrzadNadaniaFullType[] $urzedyNadania
     * @return \PocztaPolska\StructType\GetUrzedyNadaniaResponse
     */
    public function setUrzedyNadania(?array $urzedyNadania = null): self
    {
        // validation for constraint: array
        if ('' !== ($urzedyNadaniaArrayErrorMessage = self::validateUrzedyNadaniaForArrayConstraintFromSetUrzedyNadania($urzedyNadania))) {
            throw new InvalidArgumentException($urzedyNadaniaArrayErrorMessage, __LINE__);
        }
        $this->urzedyNadania = $urzedyNadania;
        
        return $this;
    }
    /**
     * Add item to urzedyNadania value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\UrzadNadaniaFullType $item
     * @return \PocztaPolska\StructType\GetUrzedyNadaniaResponse
     */
    public function addToUrzedyNadania(\PocztaPolska\StructType\UrzadNadaniaFullType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\UrzadNadaniaFullType) {
            throw new InvalidArgumentException(sprintf('The urzedyNadania property can only contain items of type \PocztaPolska\StructType\UrzadNadaniaFullType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->urzedyNadania[] = $item;
        
        return $this;
    }
}
