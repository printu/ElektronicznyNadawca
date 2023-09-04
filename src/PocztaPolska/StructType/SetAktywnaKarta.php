<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setAktywnaKarta StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetAktywnaKarta extends AbstractStructBase
{
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idKarta;

    /**
     * Constructor method for setAktywnaKarta
     * @uses SetAktywnaKarta::setIdKarta()
     * @param int $idKarta
     */
    public function __construct(int $idKarta)
    {
        $this
            ->setIdKarta($idKarta);
    }

    /**
     * Get idKarta value
     * @return int
     */
    public function getIdKarta(): int
    {
        return $this->idKarta;
    }

    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \PocztaPolska\StructType\SetAktywnaKarta
     */
    public function setIdKarta(int $idKarta): self
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;

        return $this;
    }
}
