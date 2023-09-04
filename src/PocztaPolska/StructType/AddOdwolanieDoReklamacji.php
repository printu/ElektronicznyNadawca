<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addOdwolanieDoReklamacji StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddOdwolanieDoReklamacji extends AbstractStructBase
{
    /**
     * The reklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\ReklamowanaPrzesylkaType[]
     */
    protected array $reklamacja;

    /**
     * Constructor method for addOdwolanieDoReklamacji
     * @uses AddOdwolanieDoReklamacji::setReklamacja()
     * @param \PocztaPolska\StructType\ReklamowanaPrzesylkaType[] $reklamacja
     */
    public function __construct(array $reklamacja)
    {
        $this
            ->setReklamacja($reklamacja);
    }

    /**
     * Get reklamacja value
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType[]
     */
    public function getReklamacja(): array
    {
        return $this->reklamacja;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setReklamacja method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReklamacja method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReklamacjaForArrayConstraintFromSetReklamacja(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addOdwolanieDoReklamacjiReklamacjaItem) {
            // validation for constraint: itemType
            if (!$addOdwolanieDoReklamacjiReklamacjaItem instanceof \PocztaPolska\StructType\ReklamowanaPrzesylkaType) {
                $invalidValues[] = is_object($addOdwolanieDoReklamacjiReklamacjaItem) ? get_class($addOdwolanieDoReklamacjiReklamacjaItem) : sprintf('%s(%s)', gettype($addOdwolanieDoReklamacjiReklamacjaItem), var_export($addOdwolanieDoReklamacjiReklamacjaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reklamacja property can only contain items of type \PocztaPolska\StructType\ReklamowanaPrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set reklamacja value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ReklamowanaPrzesylkaType[] $reklamacja
     * @return \PocztaPolska\StructType\AddOdwolanieDoReklamacji
     */
    public function setReklamacja(array $reklamacja): self
    {
        // validation for constraint: array
        if ('' !== ($reklamacjaArrayErrorMessage = self::validateReklamacjaForArrayConstraintFromSetReklamacja($reklamacja))) {
            throw new InvalidArgumentException($reklamacjaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($reklamacja) && count($reklamacja) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($reklamacja)), __LINE__);
        }
        $this->reklamacja = $reklamacja;

        return $this;
    }

    /**
     * Add item to reklamacja value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ReklamowanaPrzesylkaType $item
     * @return \PocztaPolska\StructType\AddOdwolanieDoReklamacji
     */
    public function addToReklamacja(\PocztaPolska\StructType\ReklamowanaPrzesylkaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ReklamowanaPrzesylkaType) {
            throw new InvalidArgumentException(sprintf('The reklamacja property can only contain items of type \PocztaPolska\StructType\ReklamowanaPrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->reklamacja) && count($this->reklamacja) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->reklamacja)), __LINE__);
        }
        $this->reklamacja[] = $item;

        return $this;
    }
}
