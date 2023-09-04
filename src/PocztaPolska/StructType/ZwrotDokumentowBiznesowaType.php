<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotDokumentowBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotDokumentowBiznesowaType extends AbstractStructBase
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $rodzaj;
    /**
     * The idDokumentyZwrotneAdresy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idDokumentyZwrotneAdresy = null;

    /**
     * Constructor method for zwrotDokumentowBiznesowaType
     * @uses ZwrotDokumentowBiznesowaType::setRodzaj()
     * @uses ZwrotDokumentowBiznesowaType::setIdDokumentyZwrotneAdresy()
     * @param string $rodzaj
     * @param int $idDokumentyZwrotneAdresy
     */
    public function __construct(string $rodzaj, ?int $idDokumentyZwrotneAdresy = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy);
    }

    /**
     * Get rodzaj value
     * @return string
     */
    public function getRodzaj(): string
    {
        return $this->rodzaj;
    }

    /**
     * Set rodzaj value
     * @uses \PocztaPolska\EnumType\TerminZwrotDokumentowBiznesowaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\TerminZwrotDokumentowBiznesowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzaj
     * @return \PocztaPolska\StructType\ZwrotDokumentowBiznesowaType
     */
    public function setRodzaj(string $rodzaj): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\TerminZwrotDokumentowBiznesowaType::valueIsValid($rodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\TerminZwrotDokumentowBiznesowaType', is_array($rodzaj) ? implode(', ', $rodzaj) : var_export($rodzaj, true), implode(', ', \PocztaPolska\EnumType\TerminZwrotDokumentowBiznesowaType::getValidValues())), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get idDokumentyZwrotneAdresy value
     * @return int|null
     */
    public function getIdDokumentyZwrotneAdresy(): ?int
    {
        return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * Set idDokumentyZwrotneAdresy value
     * @param int $idDokumentyZwrotneAdresy
     * @return \PocztaPolska\StructType\ZwrotDokumentowBiznesowaType
     */
    public function setIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy = null): self
    {
        // validation for constraint: int
        if (!is_null($idDokumentyZwrotneAdresy) && !(is_int($idDokumentyZwrotneAdresy) || ctype_digit($idDokumentyZwrotneAdresy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idDokumentyZwrotneAdresy, true), gettype($idDokumentyZwrotneAdresy)), __LINE__);
        }
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;

        return $this;
    }
}
