<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPasswordExpiredDateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPasswordExpiredDateResponse extends AbstractStructBase
{
    /**
     * The dataWygasniecia
     * @var string|null
     */
    protected ?string $dataWygasniecia = null;
    /**
     * Constructor method for getPasswordExpiredDateResponse
     * @uses GetPasswordExpiredDateResponse::setDataWygasniecia()
     * @param string $dataWygasniecia
     */
    public function __construct(?string $dataWygasniecia = null)
    {
        $this
            ->setDataWygasniecia($dataWygasniecia);
    }
    /**
     * Get dataWygasniecia value
     * @return string|null
     */
    public function getDataWygasniecia(): ?string
    {
        return $this->dataWygasniecia;
    }
    /**
     * Set dataWygasniecia value
     * @param string $dataWygasniecia
     * @return \PocztaPolska\StructType\GetPasswordExpiredDateResponse
     */
    public function setDataWygasniecia(?string $dataWygasniecia = null): self
    {
        // validation for constraint: string
        if (!is_null($dataWygasniecia) && !is_string($dataWygasniecia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataWygasniecia, true), gettype($dataWygasniecia)), __LINE__);
        }
        $this->dataWygasniecia = $dataWygasniecia;
        
        return $this;
    }
}
