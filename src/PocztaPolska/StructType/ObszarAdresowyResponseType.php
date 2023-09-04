<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for obszarAdresowyResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ObszarAdresowyResponseType extends AbstractStructBase
{
    /**
     * The isObszarMiasto
     * @var bool|null
     */
    protected ?bool $isObszarMiasto = null;
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
     * Constructor method for obszarAdresowyResponseType
     * @uses ObszarAdresowyResponseType::setIsObszarMiasto()
     * @uses ObszarAdresowyResponseType::setGuid()
     * @param bool $isObszarMiasto
     * @param string $guid
     */
    public function __construct(?bool $isObszarMiasto = null, ?string $guid = null)
    {
        $this
            ->setIsObszarMiasto($isObszarMiasto)
            ->setGuid($guid);
    }
    /**
     * Get isObszarMiasto value
     * @return bool|null
     */
    public function getIsObszarMiasto(): ?bool
    {
        return $this->isObszarMiasto;
    }
    /**
     * Set isObszarMiasto value
     * @param bool $isObszarMiasto
     * @return \PocztaPolska\StructType\ObszarAdresowyResponseType
     */
    public function setIsObszarMiasto(?bool $isObszarMiasto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isObszarMiasto) && !is_bool($isObszarMiasto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isObszarMiasto, true), gettype($isObszarMiasto)), __LINE__);
        }
        $this->isObszarMiasto = $isObszarMiasto;
        
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
     * @return \PocztaPolska\StructType\ObszarAdresowyResponseType
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
