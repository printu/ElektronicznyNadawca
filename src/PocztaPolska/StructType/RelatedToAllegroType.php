<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for relatedToAllegroType StructType
 * Meta information extracted from the WSDL
 * - documentation: Opcjonalne informacje o powiązaniu przesyłki ze sprzedażą w serwisie Allegro
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RelatedToAllegroType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: Id transakcji (MS), deal (WebAPI) lub order (RestAPI)
     * - base: xsd:string
     * - maxLength: 38
     * - minLength: 1
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The sellerId
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator sprzedającego w serwisie Allegro.
     * - base: xsd:string
     * - maxLength: 22
     * - minLength: 1
     * @var string|null
     */
    protected ?string $sellerId = null;
    /**
     * The channel
     * Meta information extracted from the WSDL
     * - documentation: Źródło identyfikatora: MS - Menedżer Sprzedaży Allegro, WEB_API - WebAPI Allegro, REST_API - RestAPI Allegro.
     * @var string|null
     */
    protected ?string $channel = null;
    /**
     * The deliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator rodzaju dostawy, gdzie dla źródła: MS - nazwa rodzaju dostawy, WEB_API - id postaci liczby, REST_API - id postaci guid
     * - base: xsd:string
     * - maxLength: 128
     * - minLength: 1
     * @var string|null
     */
    protected ?string $deliveryMethod = null;
    /**
     * Constructor method for relatedToAllegroType
     * @uses RelatedToAllegroType::setId()
     * @uses RelatedToAllegroType::setSellerId()
     * @uses RelatedToAllegroType::setChannel()
     * @uses RelatedToAllegroType::setDeliveryMethod()
     * @param string $id
     * @param string $sellerId
     * @param string $channel
     * @param string $deliveryMethod
     */
    public function __construct(?string $id = null, ?string $sellerId = null, ?string $channel = null, ?string $deliveryMethod = null)
    {
        $this
            ->setId($id)
            ->setSellerId($sellerId)
            ->setChannel($channel)
            ->setDeliveryMethod($deliveryMethod);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \PocztaPolska\StructType\RelatedToAllegroType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: maxLength(38)
        if (!is_null($id) && mb_strlen((string) $id) > 38) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 38', mb_strlen((string) $id)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($id) && mb_strlen((string) $id) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get sellerId value
     * @return string|null
     */
    public function getSellerId(): ?string
    {
        return $this->sellerId;
    }
    /**
     * Set sellerId value
     * @param string $sellerId
     * @return \PocztaPolska\StructType\RelatedToAllegroType
     */
    public function setSellerId(?string $sellerId = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerId) && !is_string($sellerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerId, true), gettype($sellerId)), __LINE__);
        }
        // validation for constraint: maxLength(22)
        if (!is_null($sellerId) && mb_strlen((string) $sellerId) > 22) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 22', mb_strlen((string) $sellerId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($sellerId) && mb_strlen((string) $sellerId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $sellerId)), __LINE__);
        }
        $this->sellerId = $sellerId;
        
        return $this;
    }
    /**
     * Get channel value
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }
    /**
     * Set channel value
     * @uses \PocztaPolska\EnumType\RelatedToAllegroChannelType::valueIsValid()
     * @uses \PocztaPolska\EnumType\RelatedToAllegroChannelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $channel
     * @return \PocztaPolska\StructType\RelatedToAllegroType
     */
    public function setChannel(?string $channel = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\RelatedToAllegroChannelType::valueIsValid($channel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\RelatedToAllegroChannelType', is_array($channel) ? implode(', ', $channel) : var_export($channel, true), implode(', ', \PocztaPolska\EnumType\RelatedToAllegroChannelType::getValidValues())), __LINE__);
        }
        $this->channel = $channel;
        
        return $this;
    }
    /**
     * Get deliveryMethod value
     * @return string|null
     */
    public function getDeliveryMethod(): ?string
    {
        return $this->deliveryMethod;
    }
    /**
     * Set deliveryMethod value
     * @param string $deliveryMethod
     * @return \PocztaPolska\StructType\RelatedToAllegroType
     */
    public function setDeliveryMethod(?string $deliveryMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryMethod) && !is_string($deliveryMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryMethod, true), gettype($deliveryMethod)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($deliveryMethod) && mb_strlen((string) $deliveryMethod) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $deliveryMethod)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($deliveryMethod) && mb_strlen((string) $deliveryMethod) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $deliveryMethod)), __LINE__);
        }
        $this->deliveryMethod = $deliveryMethod;
        
        return $this;
    }
}
