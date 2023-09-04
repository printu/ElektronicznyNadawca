<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for moveShipments StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveShipments extends AbstractStructBase
{
    /**
     * The idBuforFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idBuforFrom;
    /**
     * The idBuforTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idBuforTo;
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
     * Constructor method for moveShipments
     * @uses MoveShipments::setIdBuforFrom()
     * @uses MoveShipments::setIdBuforTo()
     * @uses MoveShipments::setGuid()
     * @param int $idBuforFrom
     * @param int $idBuforTo
     * @param string[] $guid
     */
    public function __construct(int $idBuforFrom, int $idBuforTo, array $guid)
    {
        $this
            ->setIdBuforFrom($idBuforFrom)
            ->setIdBuforTo($idBuforTo)
            ->setGuid($guid);
    }

    /**
     * Get idBuforFrom value
     * @return int
     */
    public function getIdBuforFrom(): int
    {
        return $this->idBuforFrom;
    }

    /**
     * Set idBuforFrom value
     * @param int $idBuforFrom
     * @return \PocztaPolska\StructType\MoveShipments
     */
    public function setIdBuforFrom(int $idBuforFrom): self
    {
        // validation for constraint: int
        if (!is_null($idBuforFrom) && !(is_int($idBuforFrom) || ctype_digit($idBuforFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBuforFrom, true), gettype($idBuforFrom)), __LINE__);
        }
        $this->idBuforFrom = $idBuforFrom;

        return $this;
    }

    /**
     * Get idBuforTo value
     * @return int
     */
    public function getIdBuforTo(): int
    {
        return $this->idBuforTo;
    }

    /**
     * Set idBuforTo value
     * @param int $idBuforTo
     * @return \PocztaPolska\StructType\MoveShipments
     */
    public function setIdBuforTo(int $idBuforTo): self
    {
        // validation for constraint: int
        if (!is_null($idBuforTo) && !(is_int($idBuforTo) || ctype_digit($idBuforTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBuforTo, true), gettype($idBuforTo)), __LINE__);
        }
        $this->idBuforTo = $idBuforTo;

        return $this;
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
        foreach ($values as $moveShipmentsGuidItem) {
            // validation for constraint: itemType
            if (!is_string($moveShipmentsGuidItem)) {
                $invalidValues[] = is_object($moveShipmentsGuidItem) ? get_class($moveShipmentsGuidItem) : sprintf('%s(%s)', gettype($moveShipmentsGuidItem), var_export($moveShipmentsGuidItem, true));
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
        foreach (($values ?? []) as $moveShipmentsGuidItem) {
            // validation for constraint: length(32)
            if (mb_strlen((string) $moveShipmentsGuidItem) !== 32) {
                $invalidValues[] = var_export($moveShipmentsGuidItem, true);
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
     * @return \PocztaPolska\StructType\MoveShipments
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
     * @return \PocztaPolska\StructType\MoveShipments
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
}
