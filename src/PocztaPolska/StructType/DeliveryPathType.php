<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryPathType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeliveryPathType extends AbstractStructBase
{
    /**
     * The endNode
     * @var string|null
     */
    protected ?string $endNode = null;
    /**
     * The targetingNode
     * @var string|null
     */
    protected ?string $targetingNode = null;
    /**
     * The assistantNode
     * @var string|null
     */
    protected ?string $assistantNode = null;
    /**
     * The reloadingPoint
     * @var string|null
     */
    protected ?string $reloadingPoint = null;
    /**
     * The postOffice
     * @var string|null
     */
    protected ?string $postOffice = null;
    /**
     * The deliveryRegion
     * @var string|null
     */
    protected ?string $deliveryRegion = null;

    /**
     * Constructor method for deliveryPathType
     * @uses DeliveryPathType::setEndNode()
     * @uses DeliveryPathType::setTargetingNode()
     * @uses DeliveryPathType::setAssistantNode()
     * @uses DeliveryPathType::setReloadingPoint()
     * @uses DeliveryPathType::setPostOffice()
     * @uses DeliveryPathType::setDeliveryRegion()
     * @param string $endNode
     * @param string $targetingNode
     * @param string $assistantNode
     * @param string $reloadingPoint
     * @param string $postOffice
     * @param string $deliveryRegion
     */
    public function __construct(?string $endNode = null, ?string $targetingNode = null, ?string $assistantNode = null, ?string $reloadingPoint = null, ?string $postOffice = null, ?string $deliveryRegion = null)
    {
        $this
            ->setEndNode($endNode)
            ->setTargetingNode($targetingNode)
            ->setAssistantNode($assistantNode)
            ->setReloadingPoint($reloadingPoint)
            ->setPostOffice($postOffice)
            ->setDeliveryRegion($deliveryRegion);
    }

    /**
     * Get endNode value
     * @return string|null
     */
    public function getEndNode(): ?string
    {
        return $this->endNode;
    }

    /**
     * Set endNode value
     * @param string $endNode
     * @return \PocztaPolska\StructType\DeliveryPathType
     */
    public function setEndNode(?string $endNode = null): self
    {
        // validation for constraint: string
        if (!is_null($endNode) && !is_string($endNode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endNode, true), gettype($endNode)), __LINE__);
        }
        $this->endNode = $endNode;

        return $this;
    }

    /**
     * Get targetingNode value
     * @return string|null
     */
    public function getTargetingNode(): ?string
    {
        return $this->targetingNode;
    }

    /**
     * Set targetingNode value
     * @param string $targetingNode
     * @return \PocztaPolska\StructType\DeliveryPathType
     */
    public function setTargetingNode(?string $targetingNode = null): self
    {
        // validation for constraint: string
        if (!is_null($targetingNode) && !is_string($targetingNode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetingNode, true), gettype($targetingNode)), __LINE__);
        }
        $this->targetingNode = $targetingNode;

        return $this;
    }

    /**
     * Get assistantNode value
     * @return string|null
     */
    public function getAssistantNode(): ?string
    {
        return $this->assistantNode;
    }

    /**
     * Set assistantNode value
     * @param string $assistantNode
     * @return \PocztaPolska\StructType\DeliveryPathType
     */
    public function setAssistantNode(?string $assistantNode = null): self
    {
        // validation for constraint: string
        if (!is_null($assistantNode) && !is_string($assistantNode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assistantNode, true), gettype($assistantNode)), __LINE__);
        }
        $this->assistantNode = $assistantNode;

        return $this;
    }

    /**
     * Get reloadingPoint value
     * @return string|null
     */
    public function getReloadingPoint(): ?string
    {
        return $this->reloadingPoint;
    }

    /**
     * Set reloadingPoint value
     * @param string $reloadingPoint
     * @return \PocztaPolska\StructType\DeliveryPathType
     */
    public function setReloadingPoint(?string $reloadingPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($reloadingPoint) && !is_string($reloadingPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reloadingPoint, true), gettype($reloadingPoint)), __LINE__);
        }
        $this->reloadingPoint = $reloadingPoint;

        return $this;
    }

    /**
     * Get postOffice value
     * @return string|null
     */
    public function getPostOffice(): ?string
    {
        return $this->postOffice;
    }

    /**
     * Set postOffice value
     * @param string $postOffice
     * @return \PocztaPolska\StructType\DeliveryPathType
     */
    public function setPostOffice(?string $postOffice = null): self
    {
        // validation for constraint: string
        if (!is_null($postOffice) && !is_string($postOffice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOffice, true), gettype($postOffice)), __LINE__);
        }
        $this->postOffice = $postOffice;

        return $this;
    }

    /**
     * Get deliveryRegion value
     * @return string|null
     */
    public function getDeliveryRegion(): ?string
    {
        return $this->deliveryRegion;
    }

    /**
     * Set deliveryRegion value
     * @param string $deliveryRegion
     * @return \PocztaPolska\StructType\DeliveryPathType
     */
    public function setDeliveryRegion(?string $deliveryRegion = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryRegion) && !is_string($deliveryRegion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryRegion, true), gettype($deliveryRegion)), __LINE__);
        }
        $this->deliveryRegion = $deliveryRegion;

        return $this;
    }
}
