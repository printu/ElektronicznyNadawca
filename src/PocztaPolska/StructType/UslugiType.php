<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uslugiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UslugiType extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The opis
     * @var string|null
     */
    protected ?string $opis = null;
    /**
     * Constructor method for uslugiType
     * @uses UslugiType::setId()
     * @uses UslugiType::setOpis()
     * @param string $id
     * @param string $opis
     */
    public function __construct(?string $id = null, ?string $opis = null)
    {
        $this
            ->setId($id)
            ->setOpis($opis);
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
     * @return \PocztaPolska\StructType\UslugiType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \PocztaPolska\StructType\UslugiType
     */
    public function setOpis(?string $opis = null): self
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        $this->opis = $opis;
        
        return $this;
    }
}
