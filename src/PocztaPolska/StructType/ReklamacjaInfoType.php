<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamacjaInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReklamacjaInfoType extends AbstractStructBase
{
    /**
     * The idReklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $idReklamacja;
    /**
     * The guidPrzesylki
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string
     */
    protected string $guidPrzesylki;
    /**
     * Constructor method for reklamacjaInfoType
     * @uses ReklamacjaInfoType::setIdReklamacja()
     * @uses ReklamacjaInfoType::setGuidPrzesylki()
     * @param string $idReklamacja
     * @param string $guidPrzesylki
     */
    public function __construct(string $idReklamacja, string $guidPrzesylki)
    {
        $this
            ->setIdReklamacja($idReklamacja)
            ->setGuidPrzesylki($guidPrzesylki);
    }
    /**
     * Get idReklamacja value
     * @return string
     */
    public function getIdReklamacja(): string
    {
        return $this->idReklamacja;
    }
    /**
     * Set idReklamacja value
     * @param string $idReklamacja
     * @return \PocztaPolska\StructType\ReklamacjaInfoType
     */
    public function setIdReklamacja(string $idReklamacja): self
    {
        // validation for constraint: string
        if (!is_null($idReklamacja) && !is_string($idReklamacja)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idReklamacja, true), gettype($idReklamacja)), __LINE__);
        }
        $this->idReklamacja = $idReklamacja;
        
        return $this;
    }
    /**
     * Get guidPrzesylki value
     * @return string
     */
    public function getGuidPrzesylki(): string
    {
        return $this->guidPrzesylki;
    }
    /**
     * Set guidPrzesylki value
     * @param string $guidPrzesylki
     * @return \PocztaPolska\StructType\ReklamacjaInfoType
     */
    public function setGuidPrzesylki(string $guidPrzesylki): self
    {
        // validation for constraint: string
        if (!is_null($guidPrzesylki) && !is_string($guidPrzesylki)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guidPrzesylki, true), gettype($guidPrzesylki)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guidPrzesylki) && mb_strlen((string) $guidPrzesylki) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guidPrzesylki)), __LINE__);
        }
        $this->guidPrzesylki = $guidPrzesylki;
        
        return $this;
    }
}
