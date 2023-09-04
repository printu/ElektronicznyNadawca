<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEPOStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEPOStatus extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 500
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string[]
     */
    protected array $guid;
    /**
     * The endedOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $endedOnly;
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idEnvelope;
    /**
     * The withBioepo
     * Meta information extracted from the WSDL
     * - documentation: Element służy do przekazania żądania uzupełnienia statusu EPO dla wskazanych przesyłek o dane dotyczące podpisu odbiorcy przesyłki. W zalezności od urządzenia wykorzystanego do utrwalenia podpisu, w odpowiedzi na wywołanie
     * metody może zostać zwrócony sam obraz podpisu lub obraz podpisu uzupełniony o jego dane biometryczne.
     * @var bool|null
     */
    protected ?bool $withBioepo = null;

    /**
     * Constructor method for getEPOStatus
     * @uses GetEPOStatus::setGuid()
     * @uses GetEPOStatus::setEndedOnly()
     * @uses GetEPOStatus::setIdEnvelope()
     * @uses GetEPOStatus::setWithBioepo()
     * @param string[] $guid
     * @param bool $endedOnly
     * @param int $idEnvelope
     * @param bool $withBioepo
     */
    public function __construct(array $guid, bool $endedOnly, int $idEnvelope, ?bool $withBioepo = null)
    {
        $this
            ->setGuid($guid)
            ->setEndedOnly($endedOnly)
            ->setIdEnvelope($idEnvelope)
            ->setWithBioepo($withBioepo);
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
        foreach ($values as $getEPOStatusGuidItem) {
            // validation for constraint: itemType
            if (!is_string($getEPOStatusGuidItem)) {
                $invalidValues[] = is_object($getEPOStatusGuidItem) ? get_class($getEPOStatusGuidItem) : sprintf('%s(%s)', gettype($getEPOStatusGuidItem), var_export($getEPOStatusGuidItem, true));
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
        foreach (($values ?? []) as $getEPOStatusGuidItem) {
            // validation for constraint: length(32)
            if (mb_strlen((string) $getEPOStatusGuidItem) !== 32) {
                $invalidValues[] = var_export($getEPOStatusGuidItem, true);
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
     * @return \PocztaPolska\StructType\GetEPOStatus
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
        // validation for constraint: maxOccurs(500)
        if (is_array($guid) && count($guid) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }

    /**
     * Add item to guid value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\GetEPOStatus
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
        // validation for constraint: maxOccurs(500)
        if (is_array($this->guid) && count($this->guid) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->guid)), __LINE__);
        }
        $this->guid[] = $item;

        return $this;
    }

    /**
     * Get endedOnly value
     * @return bool
     */
    public function getEndedOnly(): bool
    {
        return $this->endedOnly;
    }

    /**
     * Set endedOnly value
     * @param bool $endedOnly
     * @return \PocztaPolska\StructType\GetEPOStatus
     */
    public function setEndedOnly(bool $endedOnly): self
    {
        // validation for constraint: boolean
        if (!is_null($endedOnly) && !is_bool($endedOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($endedOnly, true), gettype($endedOnly)), __LINE__);
        }
        $this->endedOnly = $endedOnly;

        return $this;
    }

    /**
     * Get idEnvelope value
     * @return int
     */
    public function getIdEnvelope(): int
    {
        return $this->idEnvelope;
    }

    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \PocztaPolska\StructType\GetEPOStatus
     */
    public function setIdEnvelope(int $idEnvelope): self
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;

        return $this;
    }

    /**
     * Get withBioepo value
     * @return bool|null
     */
    public function getWithBioepo(): ?bool
    {
        return $this->withBioepo;
    }

    /**
     * Set withBioepo value
     * @param bool $withBioepo
     * @return \PocztaPolska\StructType\GetEPOStatus
     */
    public function setWithBioepo(?bool $withBioepo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withBioepo) && !is_bool($withBioepo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withBioepo, true), gettype($withBioepo)), __LINE__);
        }
        $this->withBioepo = $withBioepo;

        return $this;
    }
}
