<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for additionalActivityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Czynność do wykonania w ramach np. przesyłki proceduralnej
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdditionalActivityType extends AbstractStructBase
{
    /**
     * The idActivity
     * Meta information extracted from the WSDL
     * - documentation: identyfikator czynności
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idActivity = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - documentation: Nazwa czynności do wykonania | Ciąg znaków długości 127 znaków
     * - base: xsd:string
     * - maxLength: 127
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - documentation: opis czynności do wykonania | Ciąg znaków długości 1023 znaków
     * - base: xsd:string
     * - maxLength: 1023
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The critical
     * Meta information extracted from the WSDL
     * - documentation: znacznik czy czynnośc jest krytyczna. brak wykonania czynności oznaczonej jako krytyczna przerywa proces doręczenia.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $critical = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - documentation: Element określa kolejność dla czynności do wykonania w sekwecji czynności.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $order = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: Termin ważności, należy podać datę od kiedy dana czynność jest dostępna, liczone jest od godziny 0:00:00.0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: Termin ważności, należy podać datę do kiedy dana czynność jest dostępna, liczone jest do godziny 23:59:59.999
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for additionalActivityType
     * @uses AdditionalActivityType::setIdActivity()
     * @uses AdditionalActivityType::setName()
     * @uses AdditionalActivityType::setDescription()
     * @uses AdditionalActivityType::setCritical()
     * @uses AdditionalActivityType::setOrder()
     * @uses AdditionalActivityType::setValidFrom()
     * @uses AdditionalActivityType::setValidTo()
     * @param int $idActivity
     * @param string $name
     * @param string $description
     * @param bool $critical
     * @param int $order
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?int $idActivity = null, ?string $name = null, ?string $description = null, ?bool $critical = null, ?int $order = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setIdActivity($idActivity)
            ->setName($name)
            ->setDescription($description)
            ->setCritical($critical)
            ->setOrder($order)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get idActivity value
     * @return int|null
     */
    public function getIdActivity(): ?int
    {
        return $this->idActivity;
    }
    /**
     * Set idActivity value
     * @param int $idActivity
     * @return \PocztaPolska\StructType\AdditionalActivityType
     */
    public function setIdActivity(?int $idActivity = null): self
    {
        // validation for constraint: int
        if (!is_null($idActivity) && !(is_int($idActivity) || ctype_digit($idActivity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idActivity, true), gettype($idActivity)), __LINE__);
        }
        $this->idActivity = $idActivity;
        
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
     * @return \PocztaPolska\StructType\AdditionalActivityType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(127)
        if (!is_null($name) && mb_strlen((string) $name) > 127) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 127', mb_strlen((string) $name)), __LINE__);
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
     * @return \PocztaPolska\StructType\AdditionalActivityType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        // validation for constraint: maxLength(1023)
        if (!is_null($description) && mb_strlen((string) $description) > 1023) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1023', mb_strlen((string) $description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get critical value
     * @return bool|null
     */
    public function getCritical(): ?bool
    {
        return $this->critical;
    }
    /**
     * Set critical value
     * @param bool $critical
     * @return \PocztaPolska\StructType\AdditionalActivityType
     */
    public function setCritical(?bool $critical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($critical) && !is_bool($critical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($critical, true), gettype($critical)), __LINE__);
        }
        $this->critical = $critical;
        
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
     * @return \PocztaPolska\StructType\AdditionalActivityType
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
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \PocztaPolska\StructType\AdditionalActivityType
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \PocztaPolska\StructType\AdditionalActivityType
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
