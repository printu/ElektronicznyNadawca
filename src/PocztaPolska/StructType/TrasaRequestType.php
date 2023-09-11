<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trasaRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrasaRequestType extends AbstractStructBase
{
    /**
     * The fromUrzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    protected ?int $fromUrzadNadania = null;
    /**
     * The toKodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $toKodPocztowy = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $guid = null;

    /**
     * Constructor method for trasaRequestType
     * @uses TrasaRequestType::setFromUrzadNadania()
     * @uses TrasaRequestType::setToKodPocztowy()
     * @uses TrasaRequestType::setGuid()
     * @param int $fromUrzadNadania
     * @param string $toKodPocztowy
     * @param string $guid
     */
    public function __construct(?int $fromUrzadNadania = null, ?string $toKodPocztowy = null, ?string $guid = null)
    {
        $this
            ->setFromUrzadNadania($fromUrzadNadania)
            ->setToKodPocztowy($toKodPocztowy)
            ->setGuid($guid);
    }

    /**
     * Get fromUrzadNadania value
     * @return int|null
     */
    public function getFromUrzadNadania(): ?int
    {
        return $this->fromUrzadNadania;
    }

    /**
     * Set fromUrzadNadania value
     * @param int $fromUrzadNadania
     * @return \PocztaPolska\StructType\TrasaRequestType
     */
    public function setFromUrzadNadania(?int $fromUrzadNadania = null): self
    {
        // validation for constraint: int
        if (!is_null($fromUrzadNadania) && !(is_int($fromUrzadNadania) || ctype_digit($fromUrzadNadania))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fromUrzadNadania, true), gettype($fromUrzadNadania)), __LINE__);
        }
        $this->fromUrzadNadania = $fromUrzadNadania;

        return $this;
    }

    /**
     * Get toKodPocztowy value
     * @return string|null
     */
    public function getToKodPocztowy(): ?string
    {
        return $this->toKodPocztowy;
    }

    /**
     * Set toKodPocztowy value
     * @param string $toKodPocztowy
     * @return \PocztaPolska\StructType\TrasaRequestType
     */
    public function setToKodPocztowy(?string $toKodPocztowy = null): self
    {
        // validation for constraint: string
        if (!is_null($toKodPocztowy) && !is_string($toKodPocztowy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toKodPocztowy, true), gettype($toKodPocztowy)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($toKodPocztowy) && mb_strlen((string) $toKodPocztowy) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $toKodPocztowy)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($toKodPocztowy) && mb_strlen((string) $toKodPocztowy) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $toKodPocztowy)), __LINE__);
        }
        $this->toKodPocztowy = $toKodPocztowy;

        return $this;
    }

    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }

    /**
     * Set guid value
     * @param string $guid
     * @return \PocztaPolska\StructType\TrasaRequestType
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && mb_strlen((string) $guid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }
}
