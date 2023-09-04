<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunki StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunki extends AbstractStructBase
{
    /**
     * The plan
     * @var string|null
     */
    protected ?string $plan = null;
    /**
     * The prefixKodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 2
     * @var string|null
     */
    protected ?string $prefixKodPocztowy = null;
    /**
     * Constructor method for getKierunki
     * @uses GetKierunki::setPlan()
     * @uses GetKierunki::setPrefixKodPocztowy()
     * @param string $plan
     * @param string $prefixKodPocztowy
     */
    public function __construct(?string $plan = null, ?string $prefixKodPocztowy = null)
    {
        $this
            ->setPlan($plan)
            ->setPrefixKodPocztowy($prefixKodPocztowy);
    }
    /**
     * Get plan value
     * @return string|null
     */
    public function getPlan(): ?string
    {
        return $this->plan;
    }
    /**
     * Set plan value
     * @param string $plan
     * @return \PocztaPolska\StructType\GetKierunki
     */
    public function setPlan(?string $plan = null): self
    {
        // validation for constraint: string
        if (!is_null($plan) && !is_string($plan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plan, true), gettype($plan)), __LINE__);
        }
        $this->plan = $plan;
        
        return $this;
    }
    /**
     * Get prefixKodPocztowy value
     * @return string|null
     */
    public function getPrefixKodPocztowy(): ?string
    {
        return $this->prefixKodPocztowy;
    }
    /**
     * Set prefixKodPocztowy value
     * @param string $prefixKodPocztowy
     * @return \PocztaPolska\StructType\GetKierunki
     */
    public function setPrefixKodPocztowy(?string $prefixKodPocztowy = null): self
    {
        // validation for constraint: string
        if (!is_null($prefixKodPocztowy) && !is_string($prefixKodPocztowy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefixKodPocztowy, true), gettype($prefixKodPocztowy)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($prefixKodPocztowy) && mb_strlen((string) $prefixKodPocztowy) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $prefixKodPocztowy)), __LINE__);
        }
        $this->prefixKodPocztowy = $prefixKodPocztowy;
        
        return $this;
    }
}
