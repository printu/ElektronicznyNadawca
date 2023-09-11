<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListaZgodEZwrotow StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetListaZgodEZwrotow extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The idShop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idShop = null;

    /**
     * Constructor method for getListaZgodEZwrotow
     * @uses GetListaZgodEZwrotow::setStatus()
     * @uses GetListaZgodEZwrotow::setIdShop()
     * @param string $status
     * @param int $idShop
     */
    public function __construct(?string $status = null, ?int $idShop = null)
    {
        $this
            ->setStatus($status)
            ->setIdShop($idShop);
    }

    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Set status value
     * @uses \PocztaPolska\EnumType\StatusZgodyEZwrotNameType::valueIsValid()
     * @uses \PocztaPolska\EnumType\StatusZgodyEZwrotNameType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \PocztaPolska\StructType\GetListaZgodEZwrotow
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\StatusZgodyEZwrotNameType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\StatusZgodyEZwrotNameType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \PocztaPolska\EnumType\StatusZgodyEZwrotNameType::getValidValues())), __LINE__);
        }
        $this->status = $status;

        return $this;
    }

    /**
     * Get idShop value
     * @return int|null
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    /**
     * Set idShop value
     * @param int $idShop
     * @return \PocztaPolska\StructType\GetListaZgodEZwrotow
     */
    public function setIdShop(?int $idShop = null): self
    {
        // validation for constraint: int
        if (!is_null($idShop) && !(is_int($idShop) || ctype_digit($idShop))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idShop, true), gettype($idShop)), __LINE__);
        }
        $this->idShop = $idShop;

        return $this;
    }
}
