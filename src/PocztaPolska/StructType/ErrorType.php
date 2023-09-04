<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for errorType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ErrorType extends AbstractStructBase
{
    /**
     * The errorNumber
     * Meta information extracted from the WSDL
     * - default: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $errorNumber = null;
    /**
     * The errorDesc
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $errorDesc = null;
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
     * Constructor method for errorType
     * @uses ErrorType::setErrorNumber()
     * @uses ErrorType::setErrorDesc()
     * @uses ErrorType::setGuid()
     * @param int $errorNumber
     * @param string $errorDesc
     * @param string $guid
     */
    public function __construct(?int $errorNumber = 0, ?string $errorDesc = null, ?string $guid = null)
    {
        $this
            ->setErrorNumber($errorNumber)
            ->setErrorDesc($errorDesc)
            ->setGuid($guid);
    }
    /**
     * Get errorNumber value
     * @return int|null
     */
    public function getErrorNumber(): ?int
    {
        return $this->errorNumber;
    }
    /**
     * Set errorNumber value
     * @param int $errorNumber
     * @return \PocztaPolska\StructType\ErrorType
     */
    public function setErrorNumber(?int $errorNumber = 0): self
    {
        // validation for constraint: int
        if (!is_null($errorNumber) && !(is_int($errorNumber) || ctype_digit($errorNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorNumber, true), gettype($errorNumber)), __LINE__);
        }
        $this->errorNumber = $errorNumber;
        
        return $this;
    }
    /**
     * Get errorDesc value
     * @return string|null
     */
    public function getErrorDesc(): ?string
    {
        return $this->errorDesc;
    }
    /**
     * Set errorDesc value
     * @param string $errorDesc
     * @return \PocztaPolska\StructType\ErrorType
     */
    public function setErrorDesc(?string $errorDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDesc) && !is_string($errorDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDesc, true), gettype($errorDesc)), __LINE__);
        }
        $this->errorDesc = $errorDesc;
        
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
     * @return \PocztaPolska\StructType\ErrorType
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
