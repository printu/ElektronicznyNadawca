<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccompanyingDocumentsType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccompanyingDocumentsType extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The number
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * Constructor method for AccompanyingDocumentsType
     * @uses AccompanyingDocumentsType::setType()
     * @uses AccompanyingDocumentsType::setNumber()
     * @param string $type
     * @param string $number
     */
    public function __construct(?string $type = null, ?string $number = null)
    {
        $this
            ->setType($type)
            ->setNumber($number);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \PocztaPolska\EnumType\AccompanyingDocumentsEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\AccompanyingDocumentsEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \PocztaPolska\StructType\AccompanyingDocumentsType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\AccompanyingDocumentsEnum::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\AccompanyingDocumentsEnum', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \PocztaPolska\EnumType\AccompanyingDocumentsEnum::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \PocztaPolska\StructType\AccompanyingDocumentsType
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
}
