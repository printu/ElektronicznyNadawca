<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getZapowiedziFaktur StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetZapowiedziFaktur extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $data;
    /**
     * Constructor method for getZapowiedziFaktur
     * @uses GetZapowiedziFaktur::setData()
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \PocztaPolska\StructType\GetZapowiedziFaktur
     */
    public function setData(string $data): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
}
