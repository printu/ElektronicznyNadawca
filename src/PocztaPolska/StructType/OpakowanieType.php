<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for opakowanieType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OpakowanieType extends AbstractStructBase
{
    /**
     * The opakowanieGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $opakowanieGuid = null;
    /**
     * The typ
     * @var string|null
     */
    protected ?string $typ = null;
    /**
     * The sygnatura
     * @var string|null
     */
    protected ?string $sygnatura = null;
    /**
     * The ilosc
     * @var int|null
     */
    protected ?int $ilosc = null;
    /**
     * The numerOpakowaniaZbiorczego
     * @var string|null
     */
    protected ?string $numerOpakowaniaZbiorczego = null;

    /**
     * Constructor method for opakowanieType
     * @uses OpakowanieType::setOpakowanieGuid()
     * @uses OpakowanieType::setTyp()
     * @uses OpakowanieType::setSygnatura()
     * @uses OpakowanieType::setIlosc()
     * @uses OpakowanieType::setNumerOpakowaniaZbiorczego()
     * @param string $opakowanieGuid
     * @param string $typ
     * @param string $sygnatura
     * @param int $ilosc
     * @param string $numerOpakowaniaZbiorczego
     */
    public function __construct(?string $opakowanieGuid = null, ?string $typ = null, ?string $sygnatura = null, ?int $ilosc = null, ?string $numerOpakowaniaZbiorczego = null)
    {
        $this
            ->setOpakowanieGuid($opakowanieGuid)
            ->setTyp($typ)
            ->setSygnatura($sygnatura)
            ->setIlosc($ilosc)
            ->setNumerOpakowaniaZbiorczego($numerOpakowaniaZbiorczego);
    }

    /**
     * Get opakowanieGuid value
     * @return string|null
     */
    public function getOpakowanieGuid(): ?string
    {
        return $this->opakowanieGuid;
    }

    /**
     * Set opakowanieGuid value
     * @param string $opakowanieGuid
     * @return \PocztaPolska\StructType\OpakowanieType
     */
    public function setOpakowanieGuid(?string $opakowanieGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($opakowanieGuid) && !is_string($opakowanieGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opakowanieGuid, true), gettype($opakowanieGuid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($opakowanieGuid) && mb_strlen((string) $opakowanieGuid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $opakowanieGuid)), __LINE__);
        }
        $this->opakowanieGuid = $opakowanieGuid;

        return $this;
    }

    /**
     * Get typ value
     * @return string|null
     */
    public function getTyp(): ?string
    {
        return $this->typ;
    }

    /**
     * Set typ value
     * @uses \PocztaPolska\EnumType\TypOpakowanieType::valueIsValid()
     * @uses \PocztaPolska\EnumType\TypOpakowanieType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $typ
     * @return \PocztaPolska\StructType\OpakowanieType
     */
    public function setTyp(?string $typ = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\TypOpakowanieType::valueIsValid($typ)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\TypOpakowanieType', is_array($typ) ? implode(', ', $typ) : var_export($typ, true), implode(', ', \PocztaPolska\EnumType\TypOpakowanieType::getValidValues())), __LINE__);
        }
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get sygnatura value
     * @return string|null
     */
    public function getSygnatura(): ?string
    {
        return $this->sygnatura;
    }

    /**
     * Set sygnatura value
     * @param string $sygnatura
     * @return \PocztaPolska\StructType\OpakowanieType
     */
    public function setSygnatura(?string $sygnatura = null): self
    {
        // validation for constraint: string
        if (!is_null($sygnatura) && !is_string($sygnatura)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sygnatura, true), gettype($sygnatura)), __LINE__);
        }
        $this->sygnatura = $sygnatura;

        return $this;
    }

    /**
     * Get ilosc value
     * @return int|null
     */
    public function getIlosc(): ?int
    {
        return $this->ilosc;
    }

    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \PocztaPolska\StructType\OpakowanieType
     */
    public function setIlosc(?int $ilosc = null): self
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Get numerOpakowaniaZbiorczego value
     * @return string|null
     */
    public function getNumerOpakowaniaZbiorczego(): ?string
    {
        return $this->numerOpakowaniaZbiorczego;
    }

    /**
     * Set numerOpakowaniaZbiorczego value
     * @param string $numerOpakowaniaZbiorczego
     * @return \PocztaPolska\StructType\OpakowanieType
     */
    public function setNumerOpakowaniaZbiorczego(?string $numerOpakowaniaZbiorczego = null): self
    {
        // validation for constraint: string
        if (!is_null($numerOpakowaniaZbiorczego) && !is_string($numerOpakowaniaZbiorczego)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerOpakowaniaZbiorczego, true), gettype($numerOpakowaniaZbiorczego)), __LINE__);
        }
        $this->numerOpakowaniaZbiorczego = $numerOpakowaniaZbiorczego;

        return $this;
    }
}
