<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for helloResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HelloResponse extends AbstractStructBase
{
    /**
     * The out
     * @var string|null
     */
    protected ?string $out = null;
    /**
     * Constructor method for helloResponse
     * @uses HelloResponse::setOut()
     * @param string $out
     */
    public function __construct(?string $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return string|null
     */
    public function getOut(): ?string
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param string $out
     * @return \PocztaPolska\StructType\HelloResponse
     */
    public function setOut(?string $out = null): self
    {
        // validation for constraint: string
        if (!is_null($out) && !is_string($out)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($out, true), gettype($out)), __LINE__);
        }
        $this->out = $out;
        
        return $this;
    }
}
