<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteShopEZwroty extends AbstractStructBase
{
    /**
     * The idShop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idShop;
    /**
     * Constructor method for deleteShopEZwroty
     * @uses DeleteShopEZwroty::setIdShop()
     * @param int $idShop
     */
    public function __construct(int $idShop)
    {
        $this
            ->setIdShop($idShop);
    }
    /**
     * Get idShop value
     * @return int
     */
    public function getIdShop(): int
    {
        return $this->idShop;
    }
    /**
     * Set idShop value
     * @param int $idShop
     * @return \PocztaPolska\StructType\DeleteShopEZwroty
     */
    public function setIdShop(int $idShop): self
    {
        // validation for constraint: int
        if (!is_null($idShop) && !(is_int($idShop) || ctype_digit($idShop))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idShop, true), gettype($idShop)), __LINE__);
        }
        $this->idShop = $idShop;
        
        return $this;
    }
}
