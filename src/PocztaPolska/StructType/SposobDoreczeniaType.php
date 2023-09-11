<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sposobDoreczeniaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SposobDoreczeniaType extends AbstractStructBase
{
    /**
     * The kod
     * Meta information extracted from the WSDL
     * - documentation: kod sposobu doręczenia (jeden z HOM, PCS, PCF, SHP)
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $kod;
    /**
     * The identyfikatorPunktuOdbioru
     * Meta information extracted from the WSDL
     * - documentation: Wartość alfanumeryczna o maksymalnej długości 35 znaków, nie wymagany dla kod=HOM
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identyfikatorPunktuOdbioru = null;

    /**
     * Constructor method for sposobDoreczeniaType
     * @uses SposobDoreczeniaType::setKod()
     * @uses SposobDoreczeniaType::setIdentyfikatorPunktuOdbioru()
     * @param string $kod
     * @param string $identyfikatorPunktuOdbioru
     */
    public function __construct(string $kod, ?string $identyfikatorPunktuOdbioru = null)
    {
        $this
            ->setKod($kod)
            ->setIdentyfikatorPunktuOdbioru($identyfikatorPunktuOdbioru);
    }

    /**
     * Get kod value
     * @return string
     */
    public function getKod(): string
    {
        return $this->kod;
    }

    /**
     * Set kod value
     * @param string $kod
     * @return \PocztaPolska\StructType\SposobDoreczeniaType
     */
    public function setKod(string $kod): self
    {
        // validation for constraint: string
        if (!is_null($kod) && !is_string($kod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kod, true), gettype($kod)), __LINE__);
        }
        $this->kod = $kod;

        return $this;
    }

    /**
     * Get identyfikatorPunktuOdbioru value
     * @return string|null
     */
    public function getIdentyfikatorPunktuOdbioru(): ?string
    {
        return $this->identyfikatorPunktuOdbioru;
    }

    /**
     * Set identyfikatorPunktuOdbioru value
     * @param string $identyfikatorPunktuOdbioru
     * @return \PocztaPolska\StructType\SposobDoreczeniaType
     */
    public function setIdentyfikatorPunktuOdbioru(?string $identyfikatorPunktuOdbioru = null): self
    {
        // validation for constraint: string
        if (!is_null($identyfikatorPunktuOdbioru) && !is_string($identyfikatorPunktuOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identyfikatorPunktuOdbioru, true), gettype($identyfikatorPunktuOdbioru)), __LINE__);
        }
        $this->identyfikatorPunktuOdbioru = $identyfikatorPunktuOdbioru;

        return $this;
    }
}
