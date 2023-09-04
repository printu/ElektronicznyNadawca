<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentContentsDetailsType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShipmentContentsDetailsType extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $description;
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $quantity;
    /**
     * The declaredValue
     * Meta information extracted from the WSDL
     * - documentation: Declared value of a given type of goods, without the decimal point, e.g. 20000 cents.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $declaredValue;
    /**
     * The netWeight
     * Meta information extracted from the WSDL
     * - documentation: Net weight [g].
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $netWeight = null;
    /**
     * The harmonizedSystemCode
     * Meta information extracted from the WSDL
     * - documentation: Harmonized System (HS) Code.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: \d{1,10}
     * @var string|null
     */
    protected ?string $harmonizedSystemCode = null;
    /**
     * The originLocationCode
     * Meta information extracted from the WSDL
     * - documentation: Code (ISO 3166) of the country of origin of the described content. example: US
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originLocationCode = null;
    /**
     * Constructor method for ShipmentContentsDetailsType
     * @uses ShipmentContentsDetailsType::setDescription()
     * @uses ShipmentContentsDetailsType::setQuantity()
     * @uses ShipmentContentsDetailsType::setDeclaredValue()
     * @uses ShipmentContentsDetailsType::setNetWeight()
     * @uses ShipmentContentsDetailsType::setHarmonizedSystemCode()
     * @uses ShipmentContentsDetailsType::setOriginLocationCode()
     * @param string $description
     * @param int $quantity
     * @param int $declaredValue
     * @param int $netWeight
     * @param string $harmonizedSystemCode
     * @param string $originLocationCode
     */
    public function __construct(string $description, int $quantity, int $declaredValue, ?int $netWeight = null, ?string $harmonizedSystemCode = null, ?string $originLocationCode = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setDeclaredValue($declaredValue)
            ->setNetWeight($netWeight)
            ->setHarmonizedSystemCode($harmonizedSystemCode)
            ->setOriginLocationCode($originLocationCode);
    }
    /**
     * Get description value
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \PocztaPolska\StructType\ShipmentContentsDetailsType
     */
    public function setDescription(string $description): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get quantity value
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \PocztaPolska\StructType\ShipmentContentsDetailsType
     */
    public function setQuantity(int $quantity): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
        return $this;
    }
    /**
     * Get declaredValue value
     * @return int
     */
    public function getDeclaredValue(): int
    {
        return $this->declaredValue;
    }
    /**
     * Set declaredValue value
     * @param int $declaredValue
     * @return \PocztaPolska\StructType\ShipmentContentsDetailsType
     */
    public function setDeclaredValue(int $declaredValue): self
    {
        // validation for constraint: int
        if (!is_null($declaredValue) && !(is_int($declaredValue) || ctype_digit($declaredValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($declaredValue, true), gettype($declaredValue)), __LINE__);
        }
        $this->declaredValue = $declaredValue;
        
        return $this;
    }
    /**
     * Get netWeight value
     * @return int|null
     */
    public function getNetWeight(): ?int
    {
        return $this->netWeight;
    }
    /**
     * Set netWeight value
     * @param int $netWeight
     * @return \PocztaPolska\StructType\ShipmentContentsDetailsType
     */
    public function setNetWeight(?int $netWeight = null): self
    {
        // validation for constraint: int
        if (!is_null($netWeight) && !(is_int($netWeight) || ctype_digit($netWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($netWeight, true), gettype($netWeight)), __LINE__);
        }
        $this->netWeight = $netWeight;
        
        return $this;
    }
    /**
     * Get harmonizedSystemCode value
     * @return string|null
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
    }
    /**
     * Set harmonizedSystemCode value
     * @param string $harmonizedSystemCode
     * @return \PocztaPolska\StructType\ShipmentContentsDetailsType
     */
    public function setHarmonizedSystemCode(?string $harmonizedSystemCode = null): self
    {
        // validation for constraint: string
        if (!is_null($harmonizedSystemCode) && !is_string($harmonizedSystemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($harmonizedSystemCode, true), gettype($harmonizedSystemCode)), __LINE__);
        }
        // validation for constraint: pattern(\d{1,10})
        if (!is_null($harmonizedSystemCode) && !preg_match('/\\d{1,10}/', (string) $harmonizedSystemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\d{1,10}/', var_export($harmonizedSystemCode, true)), __LINE__);
        }
        $this->harmonizedSystemCode = $harmonizedSystemCode;
        
        return $this;
    }
    /**
     * Get originLocationCode value
     * @return string|null
     */
    public function getOriginLocationCode(): ?string
    {
        return $this->originLocationCode;
    }
    /**
     * Set originLocationCode value
     * @param string $originLocationCode
     * @return \PocztaPolska\StructType\ShipmentContentsDetailsType
     */
    public function setOriginLocationCode(?string $originLocationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($originLocationCode) && !is_string($originLocationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originLocationCode, true), gettype($originLocationCode)), __LINE__);
        }
        $this->originLocationCode = $originLocationCode;
        
        return $this;
    }
}
