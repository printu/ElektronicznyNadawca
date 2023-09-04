<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for awizacjaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AwizacjaType extends AbstractStructBase
{
    /**
     * The od
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $od;
    /**
     * The do
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $do;

    /**
     * Constructor method for awizacjaType
     * @uses AwizacjaType::setOd()
     * @uses AwizacjaType::setDo()
     * @param string $od
     * @param string $do
     */
    public function __construct(string $od, string $do)
    {
        $this
            ->setOd($od)
            ->setDo($do);
    }

    /**
     * Get od value
     * @return string
     */
    public function getOd(): string
    {
        return $this->od;
    }

    /**
     * Set od value
     * @param string $od
     * @return \PocztaPolska\StructType\AwizacjaType
     */
    public function setOd(string $od): self
    {
        // validation for constraint: string
        if (!is_null($od) && !is_string($od)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($od, true), gettype($od)), __LINE__);
        }
        $this->od = $od;

        return $this;
    }

    /**
     * Get do value
     * @return string
     */
    public function getDo(): string
    {
        return $this->do;
    }

    /**
     * Set do value
     * @param string $do
     * @return \PocztaPolska\StructType\AwizacjaType
     */
    public function setDo(string $do): self
    {
        // validation for constraint: string
        if (!is_null($do) && !is_string($do)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($do, true), gettype($do)), __LINE__);
        }
        $this->do = $do;

        return $this;
    }
}
