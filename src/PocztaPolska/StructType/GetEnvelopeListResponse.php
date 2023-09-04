<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeListResponse extends AbstractStructBase
{
    /**
     * The envelopes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\EnvelopeInfoType[]
     */
    protected ?array $envelopes = null;
    /**
     * Constructor method for getEnvelopeListResponse
     * @uses GetEnvelopeListResponse::setEnvelopes()
     * @param \PocztaPolska\StructType\EnvelopeInfoType[] $envelopes
     */
    public function __construct(?array $envelopes = null)
    {
        $this
            ->setEnvelopes($envelopes);
    }
    /**
     * Get envelopes value
     * @return \PocztaPolska\StructType\EnvelopeInfoType[]
     */
    public function getEnvelopes(): ?array
    {
        return $this->envelopes;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEnvelopes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopes method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopesForArrayConstraintFromSetEnvelopes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeListResponseEnvelopesItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeListResponseEnvelopesItem instanceof \PocztaPolska\StructType\EnvelopeInfoType) {
                $invalidValues[] = is_object($getEnvelopeListResponseEnvelopesItem) ? get_class($getEnvelopeListResponseEnvelopesItem) : sprintf('%s(%s)', gettype($getEnvelopeListResponseEnvelopesItem), var_export($getEnvelopeListResponseEnvelopesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The envelopes property can only contain items of type \PocztaPolska\StructType\EnvelopeInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set envelopes value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\EnvelopeInfoType[] $envelopes
     * @return \PocztaPolska\StructType\GetEnvelopeListResponse
     */
    public function setEnvelopes(?array $envelopes = null): self
    {
        // validation for constraint: array
        if ('' !== ($envelopesArrayErrorMessage = self::validateEnvelopesForArrayConstraintFromSetEnvelopes($envelopes))) {
            throw new InvalidArgumentException($envelopesArrayErrorMessage, __LINE__);
        }
        $this->envelopes = $envelopes;
        
        return $this;
    }
    /**
     * Add item to envelopes value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\EnvelopeInfoType $item
     * @return \PocztaPolska\StructType\GetEnvelopeListResponse
     */
    public function addToEnvelopes(\PocztaPolska\StructType\EnvelopeInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\EnvelopeInfoType) {
            throw new InvalidArgumentException(sprintf('The envelopes property can only contain items of type \PocztaPolska\StructType\EnvelopeInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->envelopes[] = $item;
        
        return $this;
    }
}
