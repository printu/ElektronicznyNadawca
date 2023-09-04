<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkaPocztowa StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkaPocztowa extends AbstractStructBase
{
    /**
     * The pni
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 1
     * @var int[]
     */
    protected array $pni;
    /**
     * Constructor method for getPlacowkaPocztowa
     * @uses GetPlacowkaPocztowa::setPni()
     * @param int[] $pni
     */
    public function __construct(array $pni)
    {
        $this
            ->setPni($pni);
    }
    /**
     * Get pni value
     * @return int[]
     */
    public function getPni(): array
    {
        return $this->pni;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPni method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPni method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePniForArrayConstraintFromSetPni(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPlacowkaPocztowaPniItem) {
            // validation for constraint: itemType
            if (!(is_int($getPlacowkaPocztowaPniItem) || ctype_digit($getPlacowkaPocztowaPniItem))) {
                $invalidValues[] = is_object($getPlacowkaPocztowaPniItem) ? get_class($getPlacowkaPocztowaPniItem) : sprintf('%s(%s)', gettype($getPlacowkaPocztowaPniItem), var_export($getPlacowkaPocztowaPniItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pni property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set pni value
     * @throws InvalidArgumentException
     * @param int[] $pni
     * @return \PocztaPolska\StructType\GetPlacowkaPocztowa
     */
    public function setPni(array $pni): self
    {
        // validation for constraint: array
        if ('' !== ($pniArrayErrorMessage = self::validatePniForArrayConstraintFromSetPni($pni))) {
            throw new InvalidArgumentException($pniArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (is_array($pni) && count($pni) > 5000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5000', count($pni)), __LINE__);
        }
        $this->pni = $pni;
        
        return $this;
    }
    /**
     * Add item to pni value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \PocztaPolska\StructType\GetPlacowkaPocztowa
     */
    public function addToPni(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The pni property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (is_array($this->pni) && count($this->pni) >= 5000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5000', count($this->pni)), __LINE__);
        }
        $this->pni[] = $item;
        
        return $this;
    }
}
