<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEZDO extends AbstractStructBase
{
    /**
     * The idEZDOPakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idEZDOPakiet;
    /**
     * Constructor method for getEZDO
     * @uses GetEZDO::setIdEZDOPakiet()
     * @param int $idEZDOPakiet
     */
    public function __construct(int $idEZDOPakiet)
    {
        $this
            ->setIdEZDOPakiet($idEZDOPakiet);
    }
    /**
     * Get idEZDOPakiet value
     * @return int
     */
    public function getIdEZDOPakiet(): int
    {
        return $this->idEZDOPakiet;
    }
    /**
     * Set idEZDOPakiet value
     * @param int $idEZDOPakiet
     * @return \PocztaPolska\StructType\GetEZDO
     */
    public function setIdEZDOPakiet(int $idEZDOPakiet): self
    {
        // validation for constraint: int
        if (!is_null($idEZDOPakiet) && !(is_int($idEZDOPakiet) || ctype_digit($idEZDOPakiet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEZDOPakiet, true), gettype($idEZDOPakiet)), __LINE__);
        }
        $this->idEZDOPakiet = $idEZDOPakiet;
        
        return $this;
    }
}
