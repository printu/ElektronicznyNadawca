<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunkiInfo extends AbstractStructBase
{
    /**
     * The plan
     * @var string|null
     */
    protected ?string $plan = null;
    /**
     * Constructor method for getKierunkiInfo
     * @uses GetKierunkiInfo::setPlan()
     * @param string $plan
     */
    public function __construct(?string $plan = null)
    {
        $this
            ->setPlan($plan);
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
     * @return \PocztaPolska\StructType\GetKierunkiInfo
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
}
