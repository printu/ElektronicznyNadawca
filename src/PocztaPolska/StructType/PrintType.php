<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintType extends AbstractStructBase
{
    /**
     * The kind
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $kind;
    /**
     * The method
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $method;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The resolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $resolution = null;

    /**
     * Constructor method for PrintType
     * @uses PrintType::setKind()
     * @uses PrintType::setMethod()
     * @uses PrintType::setFormat()
     * @uses PrintType::setResolution()
     * @param string $kind
     * @param string $method
     * @param string $format
     * @param string $resolution
     */
    public function __construct(string $kind, string $method, ?string $format = null, ?string $resolution = null)
    {
        $this
            ->setKind($kind)
            ->setMethod($method)
            ->setFormat($format)
            ->setResolution($resolution);
    }

    /**
     * Get kind value
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Set kind value
     * @uses \PocztaPolska\EnumType\PrintKindEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\PrintKindEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kind
     * @return \PocztaPolska\StructType\PrintType
     */
    public function setKind(string $kind): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\PrintKindEnum::valueIsValid($kind)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\PrintKindEnum', is_array($kind) ? implode(', ', $kind) : var_export($kind, true), implode(', ', \PocztaPolska\EnumType\PrintKindEnum::getValidValues())), __LINE__);
        }
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get method value
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Set method value
     * @uses \PocztaPolska\EnumType\PrintMethodEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\PrintMethodEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $method
     * @return \PocztaPolska\StructType\PrintType
     */
    public function setMethod(string $method): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\PrintMethodEnum::valueIsValid($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\PrintMethodEnum', is_array($method) ? implode(', ', $method) : var_export($method, true), implode(', ', \PocztaPolska\EnumType\PrintMethodEnum::getValidValues())), __LINE__);
        }
        $this->method = $method;

        return $this;
    }

    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * Set format value
     * @uses \PocztaPolska\EnumType\PrintFormatEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\PrintFormatEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $format
     * @return \PocztaPolska\StructType\PrintType
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\PrintFormatEnum::valueIsValid($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\PrintFormatEnum', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \PocztaPolska\EnumType\PrintFormatEnum::getValidValues())), __LINE__);
        }
        $this->format = $format;

        return $this;
    }

    /**
     * Get resolution value
     * @return string|null
     */
    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    /**
     * Set resolution value
     * @uses \PocztaPolska\EnumType\PrintResolutionEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\PrintResolutionEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resolution
     * @return \PocztaPolska\StructType\PrintType
     */
    public function setResolution(?string $resolution = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\PrintResolutionEnum::valueIsValid($resolution)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\PrintResolutionEnum', is_array($resolution) ? implode(', ', $resolution) : var_export($resolution, true), implode(', ', \PocztaPolska\EnumType\PrintResolutionEnum::getValidValues())), __LINE__);
        }
        $this->resolution = $resolution;

        return $this;
    }
}
