<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trasaResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrasaResponseType extends AbstractStructBase
{
    /**
     * The isMiejscowa
     * @var bool|null
     */
    protected ?bool $isMiejscowa = null;
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
     * Constructor method for trasaResponseType
     * @uses TrasaResponseType::setIsMiejscowa()
     * @uses TrasaResponseType::setGuid()
     * @param bool $isMiejscowa
     * @param string $guid
     */
    public function __construct(?bool $isMiejscowa = null, ?string $guid = null)
    {
        $this
            ->setIsMiejscowa($isMiejscowa)
            ->setGuid($guid);
    }

    /**
     * Get isMiejscowa value
     * @return bool|null
     */
    public function getIsMiejscowa(): ?bool
    {
        return $this->isMiejscowa;
    }

    /**
     * Set isMiejscowa value
     * @param bool $isMiejscowa
     * @return \PocztaPolska\StructType\TrasaResponseType
     */
    public function setIsMiejscowa(?bool $isMiejscowa = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMiejscowa) && !is_bool($isMiejscowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMiejscowa, true), gettype($isMiejscowa)), __LINE__);
        }
        $this->isMiejscowa = $isMiejscowa;

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
     * @return \PocztaPolska\StructType\TrasaResponseType
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
