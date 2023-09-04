<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcelContentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ParcelContentType extends AbstractStructBase
{
    /**
     * The IdParcelContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $IdParcelContent = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $order = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 200
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idKarta = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - documentation: GUID elementu parcelContent. Wartość wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * Constructor method for parcelContentType
     * @uses ParcelContentType::setIdParcelContent()
     * @uses ParcelContentType::setOrder()
     * @uses ParcelContentType::setName()
     * @uses ParcelContentType::setDescription()
     * @uses ParcelContentType::setIdKarta()
     * @uses ParcelContentType::setGuid()
     * @param int $idParcelContent
     * @param int $order
     * @param string $name
     * @param string $description
     * @param int $idKarta
     * @param string $guid
     */
    public function __construct(?int $idParcelContent = null, ?int $order = null, ?string $name = null, ?string $description = null, ?int $idKarta = null, ?string $guid = null)
    {
        $this
            ->setIdParcelContent($idParcelContent)
            ->setOrder($order)
            ->setName($name)
            ->setDescription($description)
            ->setIdKarta($idKarta)
            ->setGuid($guid);
    }
    /**
     * Get IdParcelContent value
     * @return int|null
     */
    public function getIdParcelContent(): ?int
    {
        return $this->IdParcelContent;
    }
    /**
     * Set IdParcelContent value
     * @param int $idParcelContent
     * @return \PocztaPolska\StructType\ParcelContentType
     */
    public function setIdParcelContent(?int $idParcelContent = null): self
    {
        // validation for constraint: int
        if (!is_null($idParcelContent) && !(is_int($idParcelContent) || ctype_digit($idParcelContent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idParcelContent, true), gettype($idParcelContent)), __LINE__);
        }
        $this->IdParcelContent = $idParcelContent;
        
        return $this;
    }
    /**
     * Get order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \PocztaPolska\StructType\ParcelContentType
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PocztaPolska\StructType\ParcelContentType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($name) && mb_strlen((string) $name) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \PocztaPolska\StructType\ParcelContentType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($description) && mb_strlen((string) $description) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \PocztaPolska\StructType\ParcelContentType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \PocztaPolska\StructType\ParcelContentType
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && mb_strlen((string) $guid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
}
