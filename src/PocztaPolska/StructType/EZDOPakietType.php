<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EZDOPakietType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EZDOPakietType extends AbstractStructBase
{
    /**
     * The idEZDOPakiet
     * @var int|null
     */
    protected ?int $idEZDOPakiet = null;
    /**
     * The exported
     * @var string|null
     */
    protected ?string $exported = null;
    /**
     * The idEZDOFile
     * @var string|null
     */
    protected ?string $idEZDOFile = null;
    /**
     * Constructor method for EZDOPakietType
     * @uses EZDOPakietType::setIdEZDOPakiet()
     * @uses EZDOPakietType::setExported()
     * @uses EZDOPakietType::setIdEZDOFile()
     * @param int $idEZDOPakiet
     * @param string $exported
     * @param string $idEZDOFile
     */
    public function __construct(?int $idEZDOPakiet = null, ?string $exported = null, ?string $idEZDOFile = null)
    {
        $this
            ->setIdEZDOPakiet($idEZDOPakiet)
            ->setExported($exported)
            ->setIdEZDOFile($idEZDOFile);
    }
    /**
     * Get idEZDOPakiet value
     * @return int|null
     */
    public function getIdEZDOPakiet(): ?int
    {
        return $this->idEZDOPakiet;
    }
    /**
     * Set idEZDOPakiet value
     * @param int $idEZDOPakiet
     * @return \PocztaPolska\StructType\EZDOPakietType
     */
    public function setIdEZDOPakiet(?int $idEZDOPakiet = null): self
    {
        // validation for constraint: int
        if (!is_null($idEZDOPakiet) && !(is_int($idEZDOPakiet) || ctype_digit($idEZDOPakiet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEZDOPakiet, true), gettype($idEZDOPakiet)), __LINE__);
        }
        $this->idEZDOPakiet = $idEZDOPakiet;
        
        return $this;
    }
    /**
     * Get exported value
     * @return string|null
     */
    public function getExported(): ?string
    {
        return $this->exported;
    }
    /**
     * Set exported value
     * @param string $exported
     * @return \PocztaPolska\StructType\EZDOPakietType
     */
    public function setExported(?string $exported = null): self
    {
        // validation for constraint: string
        if (!is_null($exported) && !is_string($exported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exported, true), gettype($exported)), __LINE__);
        }
        $this->exported = $exported;
        
        return $this;
    }
    /**
     * Get idEZDOFile value
     * @return string|null
     */
    public function getIdEZDOFile(): ?string
    {
        return $this->idEZDOFile;
    }
    /**
     * Set idEZDOFile value
     * @param string $idEZDOFile
     * @return \PocztaPolska\StructType\EZDOPakietType
     */
    public function setIdEZDOFile(?string $idEZDOFile = null): self
    {
        // validation for constraint: string
        if (!is_null($idEZDOFile) && !is_string($idEZDOFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idEZDOFile, true), gettype($idEZDOFile)), __LINE__);
        }
        $this->idEZDOFile = $idEZDOFile;
        
        return $this;
    }
}
