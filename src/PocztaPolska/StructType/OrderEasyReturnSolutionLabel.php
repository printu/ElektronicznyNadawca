<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderEasyReturnSolutionLabel StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderEasyReturnSolutionLabel extends AbstractStructBase
{
    /**
     * The senderAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\AddressType
     */
    protected \PocztaPolska\StructType\AddressType $senderAddress;
    /**
     * The recipientAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\AddressType
     */
    protected \PocztaPolska\StructType\AddressType $recipientAddress;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - documentation: Shipment weight [g].
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $weight = null;
    /**
     * The customsDeclaration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\CustomsDeclarationType|null
     */
    protected ?\PocztaPolska\StructType\CustomsDeclarationType $customsDeclaration = null;
    /**
     * The deliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: If not set, getPrintForParcel method should be used to get label.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DeliveryMethodType|null
     */
    protected ?\PocztaPolska\StructType\DeliveryMethodType $deliveryMethod = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - documentation: Description. maxLength: 30
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for orderEasyReturnSolutionLabel
     * @uses OrderEasyReturnSolutionLabel::setSenderAddress()
     * @uses OrderEasyReturnSolutionLabel::setRecipientAddress()
     * @uses OrderEasyReturnSolutionLabel::setWeight()
     * @uses OrderEasyReturnSolutionLabel::setCustomsDeclaration()
     * @uses OrderEasyReturnSolutionLabel::setDeliveryMethod()
     * @uses OrderEasyReturnSolutionLabel::setDescription()
     * @param \PocztaPolska\StructType\AddressType $senderAddress
     * @param \PocztaPolska\StructType\AddressType $recipientAddress
     * @param int $weight
     * @param \PocztaPolska\StructType\CustomsDeclarationType $customsDeclaration
     * @param \PocztaPolska\StructType\DeliveryMethodType $deliveryMethod
     * @param string $description
     */
    public function __construct(\PocztaPolska\StructType\AddressType $senderAddress, \PocztaPolska\StructType\AddressType $recipientAddress, ?int $weight = null, ?\PocztaPolska\StructType\CustomsDeclarationType $customsDeclaration = null, ?\PocztaPolska\StructType\DeliveryMethodType $deliveryMethod = null, ?string $description = null)
    {
        $this
            ->setSenderAddress($senderAddress)
            ->setRecipientAddress($recipientAddress)
            ->setWeight($weight)
            ->setCustomsDeclaration($customsDeclaration)
            ->setDeliveryMethod($deliveryMethod)
            ->setDescription($description);
    }
    /**
     * Get senderAddress value
     * @return \PocztaPolska\StructType\AddressType
     */
    public function getSenderAddress(): \PocztaPolska\StructType\AddressType
    {
        return $this->senderAddress;
    }
    /**
     * Set senderAddress value
     * @param \PocztaPolska\StructType\AddressType $senderAddress
     * @return \PocztaPolska\StructType\OrderEasyReturnSolutionLabel
     */
    public function setSenderAddress(\PocztaPolska\StructType\AddressType $senderAddress): self
    {
        $this->senderAddress = $senderAddress;
        
        return $this;
    }
    /**
     * Get recipientAddress value
     * @return \PocztaPolska\StructType\AddressType
     */
    public function getRecipientAddress(): \PocztaPolska\StructType\AddressType
    {
        return $this->recipientAddress;
    }
    /**
     * Set recipientAddress value
     * @param \PocztaPolska\StructType\AddressType $recipientAddress
     * @return \PocztaPolska\StructType\OrderEasyReturnSolutionLabel
     */
    public function setRecipientAddress(\PocztaPolska\StructType\AddressType $recipientAddress): self
    {
        $this->recipientAddress = $recipientAddress;
        
        return $this;
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $weight
     * @return \PocztaPolska\StructType\OrderEasyReturnSolutionLabel
     */
    public function setWeight(?int $weight = null): self
    {
        // validation for constraint: int
        if (!is_null($weight) && !(is_int($weight) || ctype_digit($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get customsDeclaration value
     * @return \PocztaPolska\StructType\CustomsDeclarationType|null
     */
    public function getCustomsDeclaration(): ?\PocztaPolska\StructType\CustomsDeclarationType
    {
        return $this->customsDeclaration;
    }
    /**
     * Set customsDeclaration value
     * @param \PocztaPolska\StructType\CustomsDeclarationType $customsDeclaration
     * @return \PocztaPolska\StructType\OrderEasyReturnSolutionLabel
     */
    public function setCustomsDeclaration(?\PocztaPolska\StructType\CustomsDeclarationType $customsDeclaration = null): self
    {
        $this->customsDeclaration = $customsDeclaration;
        
        return $this;
    }
    /**
     * Get deliveryMethod value
     * @return \PocztaPolska\StructType\DeliveryMethodType|null
     */
    public function getDeliveryMethod(): ?\PocztaPolska\StructType\DeliveryMethodType
    {
        return $this->deliveryMethod;
    }
    /**
     * Set deliveryMethod value
     * @param \PocztaPolska\StructType\DeliveryMethodType $deliveryMethod
     * @return \PocztaPolska\StructType\OrderEasyReturnSolutionLabel
     */
    public function setDeliveryMethod(?\PocztaPolska\StructType\DeliveryMethodType $deliveryMethod = null): self
    {
        $this->deliveryMethod = $deliveryMethod;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \PocztaPolska\StructType\OrderEasyReturnSolutionLabel
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
