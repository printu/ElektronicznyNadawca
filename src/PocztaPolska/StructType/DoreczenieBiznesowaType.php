<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczenieBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoreczenieBiznesowaType extends AbstractStructBase
{
    /**
     * The doRakWlasnych
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $doRakWlasnych = null;
    /**
     * Constructor method for doreczenieBiznesowaType
     * @uses DoreczenieBiznesowaType::setDoRakWlasnych()
     * @param bool $doRakWlasnych
     */
    public function __construct(?bool $doRakWlasnych = null)
    {
        $this
            ->setDoRakWlasnych($doRakWlasnych);
    }
    /**
     * Get doRakWlasnych value
     * @return bool|null
     */
    public function getDoRakWlasnych(): ?bool
    {
        return $this->doRakWlasnych;
    }
    /**
     * Set doRakWlasnych value
     * @param bool $doRakWlasnych
     * @return \PocztaPolska\StructType\DoreczenieBiznesowaType
     */
    public function setDoRakWlasnych(?bool $doRakWlasnych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($doRakWlasnych) && !is_bool($doRakWlasnych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doRakWlasnych, true), gettype($doRakWlasnych)), __LINE__);
        }
        $this->doRakWlasnych = $doRakWlasnych;
        
        return $this;
    }
}
