<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isObszarMiasto StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsObszarMiasto extends AbstractStructBase
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\ObszarAdresowyType[]
     */
    protected array $adres;

    /**
     * Constructor method for isObszarMiasto
     * @uses IsObszarMiasto::setAdres()
     * @param \PocztaPolska\StructType\ObszarAdresowyType[] $adres
     */
    public function __construct(array $adres)
    {
        $this
            ->setAdres($adres);
    }

    /**
     * Get adres value
     * @return \PocztaPolska\StructType\ObszarAdresowyType[]
     */
    public function getAdres(): array
    {
        return $this->adres;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAdres method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdres method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdresForArrayConstraintFromSetAdres(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $isObszarMiastoAdresItem) {
            // validation for constraint: itemType
            if (!$isObszarMiastoAdresItem instanceof \PocztaPolska\StructType\ObszarAdresowyType) {
                $invalidValues[] = is_object($isObszarMiastoAdresItem) ? get_class($isObszarMiastoAdresItem) : sprintf('%s(%s)', gettype($isObszarMiastoAdresItem), var_export($isObszarMiastoAdresItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The adres property can only contain items of type \PocztaPolska\StructType\ObszarAdresowyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set adres value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ObszarAdresowyType[] $adres
     * @return \PocztaPolska\StructType\IsObszarMiasto
     */
    public function setAdres(array $adres): self
    {
        // validation for constraint: array
        if ('' !== ($adresArrayErrorMessage = self::validateAdresForArrayConstraintFromSetAdres($adres))) {
            throw new InvalidArgumentException($adresArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($adres) && count($adres) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($adres)), __LINE__);
        }
        $this->adres = $adres;

        return $this;
    }

    /**
     * Add item to adres value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ObszarAdresowyType $item
     * @return \PocztaPolska\StructType\IsObszarMiasto
     */
    public function addToAdres(\PocztaPolska\StructType\ObszarAdresowyType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ObszarAdresowyType) {
            throw new InvalidArgumentException(sprintf('The adres property can only contain items of type \PocztaPolska\StructType\ObszarAdresowyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->adres) && count($this->adres) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->adres)), __LINE__);
        }
        $this->adres[] = $item;

        return $this;
    }
}
