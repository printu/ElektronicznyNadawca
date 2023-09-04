<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKarty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKarty extends AbstractStructBase
{
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $idKarta = null;
    /**
     * Constructor method for getKarty
     * @uses GetKarty::setIdKarta()
     * @param int[] $idKarta
     */
    public function __construct(?array $idKarta = null)
    {
        $this
            ->setIdKarta($idKarta);
    }
    /**
     * Get idKarta value
     * @return int[]
     */
    public function getIdKarta(): ?array
    {
        return $this->idKarta;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIdKarta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdKarta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdKartaForArrayConstraintFromSetIdKarta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKartyIdKartaItem) {
            // validation for constraint: itemType
            if (!(is_int($getKartyIdKartaItem) || ctype_digit($getKartyIdKartaItem))) {
                $invalidValues[] = is_object($getKartyIdKartaItem) ? get_class($getKartyIdKartaItem) : sprintf('%s(%s)', gettype($getKartyIdKartaItem), var_export($getKartyIdKartaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The idKarta property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set idKarta value
     * @throws InvalidArgumentException
     * @param int[] $idKarta
     * @return \PocztaPolska\StructType\GetKarty
     */
    public function setIdKarta(?array $idKarta = null): self
    {
        // validation for constraint: array
        if ('' !== ($idKartaArrayErrorMessage = self::validateIdKartaForArrayConstraintFromSetIdKarta($idKarta))) {
            throw new InvalidArgumentException($idKartaArrayErrorMessage, __LINE__);
        }
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Add item to idKarta value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \PocztaPolska\StructType\GetKarty
     */
    public function addToIdKarta(int $item): self
    {
        // validation for constraint: itemType
        if (!is_int($item)) {
            throw new InvalidArgumentException(sprintf('The idKarta property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->idKarta[] = $item;
        
        return $this;
    }
}
