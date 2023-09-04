<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setEnvelopeBuforDataNadania StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetEnvelopeBuforDataNadania extends AbstractStructBase
{
    /**
     * The dataNadania
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $dataNadania;

    /**
     * Constructor method for setEnvelopeBuforDataNadania
     * @uses SetEnvelopeBuforDataNadania::setDataNadania()
     * @param string $dataNadania
     */
    public function __construct(string $dataNadania)
    {
        $this
            ->setDataNadania($dataNadania);
    }

    /**
     * Get dataNadania value
     * @return string
     */
    public function getDataNadania(): string
    {
        return $this->dataNadania;
    }

    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \PocztaPolska\StructType\SetEnvelopeBuforDataNadania
     */
    public function setDataNadania(string $dataNadania): self
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;

        return $this;
    }
}
