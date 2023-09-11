<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintResultType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintResultType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * The print
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $print = null;

    /**
     * Constructor method for PrintResultType
     * @uses PrintResultType::setGuid()
     * @uses PrintResultType::setPrint()
     * @param string $guid
     * @param string $print
     */
    public function __construct(?string $guid = null, ?string $print = null)
    {
        $this
            ->setGuid($guid)
            ->setPrint($print);
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
     * @return \PocztaPolska\StructType\PrintResultType
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

    /**
     * Get print value
     * @return string|null
     */
    public function getPrint(): ?string
    {
        return $this->print;
    }

    /**
     * Set print value
     * @param string $print
     * @return \PocztaPolska\StructType\PrintResultType
     */
    public function setPrint(?string $print = null): self
    {
        // validation for constraint: string
        if (!is_null($print) && !is_string($print)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($print, true), gettype($print)), __LINE__);
        }
        $this->print = $print;

        return $this;
    }
}
