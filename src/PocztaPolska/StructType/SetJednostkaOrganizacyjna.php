<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setJednostkaOrganizacyjna StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetJednostkaOrganizacyjna extends AbstractStructBase
{
    /**
     * The jednostkaOrganizacyjna
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\JednostkaOrganizacyjnaType[]
     */
    protected array $jednostkaOrganizacyjna;
    /**
     * Constructor method for setJednostkaOrganizacyjna
     * @uses SetJednostkaOrganizacyjna::setJednostkaOrganizacyjna()
     * @param \PocztaPolska\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    public function __construct(array $jednostkaOrganizacyjna)
    {
        $this
            ->setJednostkaOrganizacyjna($jednostkaOrganizacyjna);
    }
    /**
     * Get jednostkaOrganizacyjna value
     * @return \PocztaPolska\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna(): array
    {
        return $this->jednostkaOrganizacyjna;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJednostkaOrganizacyjna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJednostkaOrganizacyjna method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJednostkaOrganizacyjnaForArrayConstraintFromSetJednostkaOrganizacyjna(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem) {
            // validation for constraint: itemType
            if (!$setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem instanceof \PocztaPolska\StructType\JednostkaOrganizacyjnaType) {
                $invalidValues[] = is_object($setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem) ? get_class($setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem) : sprintf('%s(%s)', gettype($setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem), var_export($setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The jednostkaOrganizacyjna property can only contain items of type \PocztaPolska\StructType\JednostkaOrganizacyjnaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set jednostkaOrganizacyjna value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     * @return \PocztaPolska\StructType\SetJednostkaOrganizacyjna
     */
    public function setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna): self
    {
        // validation for constraint: array
        if ('' !== ($jednostkaOrganizacyjnaArrayErrorMessage = self::validateJednostkaOrganizacyjnaForArrayConstraintFromSetJednostkaOrganizacyjna($jednostkaOrganizacyjna))) {
            throw new InvalidArgumentException($jednostkaOrganizacyjnaArrayErrorMessage, __LINE__);
        }
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
        
        return $this;
    }
    /**
     * Add item to jednostkaOrganizacyjna value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\JednostkaOrganizacyjnaType $item
     * @return \PocztaPolska\StructType\SetJednostkaOrganizacyjna
     */
    public function addToJednostkaOrganizacyjna(\PocztaPolska\StructType\JednostkaOrganizacyjnaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\JednostkaOrganizacyjnaType) {
            throw new InvalidArgumentException(sprintf('The jednostkaOrganizacyjna property can only contain items of type \PocztaPolska\StructType\JednostkaOrganizacyjnaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->jednostkaOrganizacyjna[] = $item;
        
        return $this;
    }
}
