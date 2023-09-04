<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieEDoreczeniaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieEDoreczeniaType extends AbstractStructBase
{
    /**
     * The sposob
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $sposob;
    /**
     * The kontakt
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minLength: 0
     * - minOccurs: 1
     * @var string
     */
    protected string $kontakt;
    /**
     * Constructor method for potwierdzenieEDoreczeniaType
     * @uses PotwierdzenieEDoreczeniaType::setSposob()
     * @uses PotwierdzenieEDoreczeniaType::setKontakt()
     * @param string $sposob
     * @param string $kontakt
     */
    public function __construct(string $sposob, string $kontakt)
    {
        $this
            ->setSposob($sposob)
            ->setKontakt($kontakt);
    }
    /**
     * Get sposob value
     * @return string
     */
    public function getSposob(): string
    {
        return $this->sposob;
    }
    /**
     * Set sposob value
     * @uses \PocztaPolska\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\ESposobPowiadomieniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sposob
     * @return \PocztaPolska\StructType\PotwierdzenieEDoreczeniaType
     */
    public function setSposob(string $sposob): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\ESposobPowiadomieniaType::valueIsValid($sposob)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\ESposobPowiadomieniaType', is_array($sposob) ? implode(', ', $sposob) : var_export($sposob, true), implode(', ', \PocztaPolska\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->sposob = $sposob;
        
        return $this;
    }
    /**
     * Get kontakt value
     * @return string
     */
    public function getKontakt(): string
    {
        return $this->kontakt;
    }
    /**
     * Set kontakt value
     * @param string $kontakt
     * @return \PocztaPolska\StructType\PotwierdzenieEDoreczeniaType
     */
    public function setKontakt(string $kontakt): self
    {
        // validation for constraint: string
        if (!is_null($kontakt) && !is_string($kontakt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kontakt, true), gettype($kontakt)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($kontakt) && mb_strlen((string) $kontakt) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $kontakt)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($kontakt) && mb_strlen((string) $kontakt) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $kontakt)), __LINE__);
        }
        $this->kontakt = $kontakt;
        
        return $this;
    }
}
