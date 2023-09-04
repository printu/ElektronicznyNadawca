<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaFullType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaFullType extends AbstractStructBase
{
    /**
     * The przesylkaShort
     * @var \PocztaPolska\StructType\PrzesylkaShortType|null
     */
    protected ?\PocztaPolska\StructType\PrzesylkaShortType $przesylkaShort = null;
    /**
     * The przesylkaFull
     * @var \PocztaPolska\StructType\PrzesylkaType|null
     */
    protected ?\PocztaPolska\StructType\PrzesylkaType $przesylkaFull = null;
    /**
     * Constructor method for przesylkaFullType
     * @uses PrzesylkaFullType::setPrzesylkaShort()
     * @uses PrzesylkaFullType::setPrzesylkaFull()
     * @param \PocztaPolska\StructType\PrzesylkaShortType $przesylkaShort
     * @param \PocztaPolska\StructType\PrzesylkaType $przesylkaFull
     */
    public function __construct(?\PocztaPolska\StructType\PrzesylkaShortType $przesylkaShort = null, ?\PocztaPolska\StructType\PrzesylkaType $przesylkaFull = null)
    {
        $this
            ->setPrzesylkaShort($przesylkaShort)
            ->setPrzesylkaFull($przesylkaFull);
    }
    /**
     * Get przesylkaShort value
     * @return \PocztaPolska\StructType\PrzesylkaShortType|null
     */
    public function getPrzesylkaShort(): ?\PocztaPolska\StructType\PrzesylkaShortType
    {
        return $this->przesylkaShort;
    }
    /**
     * Set przesylkaShort value
     * @param \PocztaPolska\StructType\PrzesylkaShortType $przesylkaShort
     * @return \PocztaPolska\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaShort(?\PocztaPolska\StructType\PrzesylkaShortType $przesylkaShort = null): self
    {
        $this->przesylkaShort = $przesylkaShort;
        
        return $this;
    }
    /**
     * Get przesylkaFull value
     * @return \PocztaPolska\StructType\PrzesylkaType|null
     */
    public function getPrzesylkaFull(): ?\PocztaPolska\StructType\PrzesylkaType
    {
        return $this->przesylkaFull;
    }
    /**
     * Set przesylkaFull value
     * @param \PocztaPolska\StructType\PrzesylkaType $przesylkaFull
     * @return \PocztaPolska\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaFull(?\PocztaPolska\StructType\PrzesylkaType $przesylkaFull = null): self
    {
        $this->przesylkaFull = $przesylkaFull;
        
        return $this;
    }
}
