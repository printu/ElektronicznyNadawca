<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelReklamacja StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelReklamacja extends AbstractStructBase
{
    /**
     * The idRelkamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idRelkamacja;

    /**
     * Constructor method for cancelReklamacja
     * @uses CancelReklamacja::setIdRelkamacja()
     * @param int $idRelkamacja
     */
    public function __construct(int $idRelkamacja)
    {
        $this
            ->setIdRelkamacja($idRelkamacja);
    }

    /**
     * Get idRelkamacja value
     * @return int
     */
    public function getIdRelkamacja(): int
    {
        return $this->idRelkamacja;
    }

    /**
     * Set idRelkamacja value
     * @param int $idRelkamacja
     * @return \PocztaPolska\StructType\CancelReklamacja
     */
    public function setIdRelkamacja(int $idRelkamacja): self
    {
        // validation for constraint: int
        if (!is_null($idRelkamacja) && !(is_int($idRelkamacja) || ctype_digit($idRelkamacja))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idRelkamacja, true), gettype($idRelkamacja)), __LINE__);
        }
        $this->idRelkamacja = $idRelkamacja;

        return $this;
    }
}
