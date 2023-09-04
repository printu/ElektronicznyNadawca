<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hello StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Hello extends AbstractStructBase
{
    /**
     * The in
     * @var string|null
     */
    protected ?string $in = null;
    /**
     * Constructor method for hello
     * @uses Hello::setIn()
     * @param string $in
     */
    public function __construct(?string $in = null)
    {
        $this
            ->setIn($in);
    }
    /**
     * Get in value
     * @return string|null
     */
    public function getIn(): ?string
    {
        return $this->in;
    }
    /**
     * Set in value
     * @param string $in
     * @return \PocztaPolska\StructType\Hello
     */
    public function setIn(?string $in = null): self
    {
        // validation for constraint: string
        if (!is_null($in) && !is_string($in)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($in, true), gettype($in)), __LINE__);
        }
        $this->in = $in;
        
        return $this;
    }
}
