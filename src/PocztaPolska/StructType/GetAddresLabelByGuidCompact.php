<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddresLabelByGuidCompact StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAddresLabelByGuidCompact extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string[]
     */
    protected array $guid;
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idBufor = null;
    /**
     * Constructor method for getAddresLabelByGuidCompact
     * @uses GetAddresLabelByGuidCompact::setGuid()
     * @uses GetAddresLabelByGuidCompact::setIdBufor()
     * @param string[] $guid
     * @param int $idBufor
     */
    public function __construct(array $guid, ?int $idBufor = null)
    {
        $this
            ->setGuid($guid)
            ->setIdBufor($idBufor);
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
        foreach ($values as $getAddresLabelByGuidCompactGuidItem) {
            // validation for constraint: itemType
            if (!is_string($getAddresLabelByGuidCompactGuidItem)) {
                $invalidValues[] = is_object($getAddresLabelByGuidCompactGuidItem) ? get_class($getAddresLabelByGuidCompactGuidItem) : sprintf('%s(%s)', gettype($getAddresLabelByGuidCompactGuidItem), var_export($getAddresLabelByGuidCompactGuidItem, true));
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
        foreach (($values ?? []) as $getAddresLabelByGuidCompactGuidItem) {
            // validation for constraint: length(32)
            if (mb_strlen((string) $getAddresLabelByGuidCompactGuidItem) !== 32) {
                $invalidValues[] = var_export($getAddresLabelByGuidCompactGuidItem, true);
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
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidCompact
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
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Add item to guid value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidCompact
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
        $this->guid[] = $item;
        
        return $this;
    }
    /**
     * Get idBufor value
     * @return int|null
     */
    public function getIdBufor(): ?int
    {
        return $this->idBufor;
    }
    /**
     * Set idBufor value
     * @param int $idBufor
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidCompact
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;
        
        return $this;
    }
}
