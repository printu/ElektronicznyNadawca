<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pocztex2021NaDzisType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Pocztex2021NaDzisType extends Pocztex2021Type
{
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\SubPocztex2021NaDzisType[]
     */
    protected ?array $subPrzesylka = null;
    /**
     * The odleglosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $odleglosc = null;
    /**
     * The obszar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $obszar = null;
    /**
     * Constructor method for pocztex2021NaDzisType
     * @uses Pocztex2021NaDzisType::setSubPrzesylka()
     * @uses Pocztex2021NaDzisType::setOdleglosc()
     * @uses Pocztex2021NaDzisType::setObszar()
     * @param \PocztaPolska\StructType\SubPocztex2021NaDzisType[] $subPrzesylka
     * @param int $odleglosc
     * @param string $obszar
     */
    public function __construct(?array $subPrzesylka = null, ?int $odleglosc = null, ?string $obszar = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setOdleglosc($odleglosc)
            ->setObszar($obszar);
    }
    /**
     * Get subPrzesylka value
     * @return \PocztaPolska\StructType\SubPocztex2021NaDzisType[]
     */
    public function getSubPrzesylka(): ?array
    {
        return $this->subPrzesylka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pocztex2021NaDzisTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$pocztex2021NaDzisTypeSubPrzesylkaItem instanceof \PocztaPolska\StructType\SubPocztex2021NaDzisType) {
                $invalidValues[] = is_object($pocztex2021NaDzisTypeSubPrzesylkaItem) ? get_class($pocztex2021NaDzisTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($pocztex2021NaDzisTypeSubPrzesylkaItem), var_export($pocztex2021NaDzisTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \PocztaPolska\StructType\SubPocztex2021NaDzisType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set subPrzesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SubPocztex2021NaDzisType[] $subPrzesylka
     * @return \PocztaPolska\StructType\Pocztex2021NaDzisType
     */
    public function setSubPrzesylka(?array $subPrzesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($subPrzesylkaArrayErrorMessage = self::validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka($subPrzesylka))) {
            throw new InvalidArgumentException($subPrzesylkaArrayErrorMessage, __LINE__);
        }
        $this->subPrzesylka = $subPrzesylka;
        
        return $this;
    }
    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SubPocztex2021NaDzisType $item
     * @return \PocztaPolska\StructType\Pocztex2021NaDzisType
     */
    public function addToSubPrzesylka(\PocztaPolska\StructType\SubPocztex2021NaDzisType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\SubPocztex2021NaDzisType) {
            throw new InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \PocztaPolska\StructType\SubPocztex2021NaDzisType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->subPrzesylka[] = $item;
        
        return $this;
    }
    /**
     * Get odleglosc value
     * @return int|null
     */
    public function getOdleglosc(): ?int
    {
        return $this->odleglosc;
    }
    /**
     * Set odleglosc value
     * @param int $odleglosc
     * @return \PocztaPolska\StructType\Pocztex2021NaDzisType
     */
    public function setOdleglosc(?int $odleglosc = null): self
    {
        // validation for constraint: int
        if (!is_null($odleglosc) && !(is_int($odleglosc) || ctype_digit($odleglosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odleglosc, true), gettype($odleglosc)), __LINE__);
        }
        $this->odleglosc = $odleglosc;
        
        return $this;
    }
    /**
     * Get obszar value
     * @return string|null
     */
    public function getObszar(): ?string
    {
        return $this->obszar;
    }
    /**
     * Set obszar value
     * @uses \PocztaPolska\EnumType\ObszarType::valueIsValid()
     * @uses \PocztaPolska\EnumType\ObszarType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $obszar
     * @return \PocztaPolska\StructType\Pocztex2021NaDzisType
     */
    public function setObszar(?string $obszar = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\ObszarType::valueIsValid($obszar)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\ObszarType', is_array($obszar) ? implode(', ', $obszar) : var_export($obszar, true), implode(', ', \PocztaPolska\EnumType\ObszarType::getValidValues())), __LINE__);
        }
        $this->obszar = $obszar;
        
        return $this;
    }
}
