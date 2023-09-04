<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for downloadIWDContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DownloadIWDContent extends AbstractStructBase
{
    /**
     * The idEnvelope
     * @var int|null
     */
    protected ?int $idEnvelope = null;
    /**
     * Constructor method for downloadIWDContent
     * @uses DownloadIWDContent::setIdEnvelope()
     * @param int $idEnvelope
     */
    public function __construct(?int $idEnvelope = null)
    {
        $this
            ->setIdEnvelope($idEnvelope);
    }
    /**
     * Get idEnvelope value
     * @return int|null
     */
    public function getIdEnvelope(): ?int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \PocztaPolska\StructType\DownloadIWDContent
     */
    public function setIdEnvelope(?int $idEnvelope = null): self
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
}
