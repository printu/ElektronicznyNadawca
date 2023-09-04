<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateShopEZwroty extends AbstractStructBase
{
    /**
     * The shop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\ShopEZwrotyType
     */
    protected \PocztaPolska\StructType\ShopEZwrotyType $shop;
    /**
     * Constructor method for createShopEZwroty
     * @uses CreateShopEZwroty::setShop()
     * @param \PocztaPolska\StructType\ShopEZwrotyType $shop
     */
    public function __construct(\PocztaPolska\StructType\ShopEZwrotyType $shop)
    {
        $this
            ->setShop($shop);
    }
    /**
     * Get shop value
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function getShop(): \PocztaPolska\StructType\ShopEZwrotyType
    {
        return $this->shop;
    }
    /**
     * Set shop value
     * @param \PocztaPolska\StructType\ShopEZwrotyType $shop
     * @return \PocztaPolska\StructType\CreateShopEZwroty
     */
    public function setShop(\PocztaPolska\StructType\ShopEZwrotyType $shop): self
    {
        $this->shop = $shop;
        
        return $this;
    }
}
