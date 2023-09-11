<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getOutboxBook StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOutboxBook extends AbstractStructBase
{
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idEnvelope;
    /**
     * The includeNierejestrowane
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeNierejestrowane = null;

    /**
     * Constructor method for getOutboxBook
     * @uses GetOutboxBook::setIdEnvelope()
     * @uses GetOutboxBook::setIncludeNierejestrowane()
     * @param int $idEnvelope
     * @param bool $includeNierejestrowane
     */
    public function __construct(int $idEnvelope, ?bool $includeNierejestrowane = null)
    {
        $this
            ->setIdEnvelope($idEnvelope)
            ->setIncludeNierejestrowane($includeNierejestrowane);
    }

    /**
     * Get idEnvelope value
     * @return int
     */
    public function getIdEnvelope(): int
    {
        return $this->idEnvelope;
    }

    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \PocztaPolska\StructType\GetOutboxBook
     */
    public function setIdEnvelope(int $idEnvelope): self
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;

        return $this;
    }

    /**
     * Get includeNierejestrowane value
     * @return bool|null
     */
    public function getIncludeNierejestrowane(): ?bool
    {
        return $this->includeNierejestrowane;
    }

    /**
     * Set includeNierejestrowane value
     * @param bool $includeNierejestrowane
     * @return \PocztaPolska\StructType\GetOutboxBook
     */
    public function setIncludeNierejestrowane(?bool $includeNierejestrowane = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeNierejestrowane) && !is_bool($includeNierejestrowane)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNierejestrowane, true), gettype($includeNierejestrowane)), __LINE__);
        }
        $this->includeNierejestrowane = $includeNierejestrowane;

        return $this;
    }
}
