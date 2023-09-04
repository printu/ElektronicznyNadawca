<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBufor StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeBufor extends AbstractStructBase
{
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idBufor = null;
    /**
     * Constructor method for getEnvelopeBufor
     * @uses GetEnvelopeBufor::setIdBufor()
     * @param int $idBufor
     */
    public function __construct(?int $idBufor = null)
    {
        $this
            ->setIdBufor($idBufor);
    }
    /**
     * Get idBufor value
     * @return int|null
     */
    public function getIdBufor(): ?int
    {
        return $this->idBufor;
    }
    /**
     * Set idBufor value
     * @param int $idBufor
     * @return \PocztaPolska\StructType\GetEnvelopeBufor
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;
        
        return $this;
    }
}
