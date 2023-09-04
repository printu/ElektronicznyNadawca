<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EPOInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EPOInfoType extends AbstractStructBase
{
    /**
     * The awizoPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AwizoPrzesylkiType|null
     */
    protected ?\PocztaPolska\StructType\AwizoPrzesylkiType $awizoPrzesylki = null;
    /**
     * The doreczeniePrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DoreczeniePrzesylkiType|null
     */
    protected ?\PocztaPolska\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null;
    /**
     * The zwrotPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ZwrotPrzesylkiType|null
     */
    protected ?\PocztaPolska\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null;
    /**
     * Constructor method for EPOInfoType
     * @uses EPOInfoType::setAwizoPrzesylki()
     * @uses EPOInfoType::setDoreczeniePrzesylki()
     * @uses EPOInfoType::setZwrotPrzesylki()
     * @param \PocztaPolska\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @param \PocztaPolska\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @param \PocztaPolska\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     */
    public function __construct(?\PocztaPolska\StructType\AwizoPrzesylkiType $awizoPrzesylki = null, ?\PocztaPolska\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null, ?\PocztaPolska\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null)
    {
        $this
            ->setAwizoPrzesylki($awizoPrzesylki)
            ->setDoreczeniePrzesylki($doreczeniePrzesylki)
            ->setZwrotPrzesylki($zwrotPrzesylki);
    }
    /**
     * Get awizoPrzesylki value
     * @return \PocztaPolska\StructType\AwizoPrzesylkiType|null
     */
    public function getAwizoPrzesylki(): ?\PocztaPolska\StructType\AwizoPrzesylkiType
    {
        return $this->awizoPrzesylki;
    }
    /**
     * Set awizoPrzesylki value
     * @param \PocztaPolska\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @return \PocztaPolska\StructType\EPOInfoType
     */
    public function setAwizoPrzesylki(?\PocztaPolska\StructType\AwizoPrzesylkiType $awizoPrzesylki = null): self
    {
        $this->awizoPrzesylki = $awizoPrzesylki;
        
        return $this;
    }
    /**
     * Get doreczeniePrzesylki value
     * @return \PocztaPolska\StructType\DoreczeniePrzesylkiType|null
     */
    public function getDoreczeniePrzesylki(): ?\PocztaPolska\StructType\DoreczeniePrzesylkiType
    {
        return $this->doreczeniePrzesylki;
    }
    /**
     * Set doreczeniePrzesylki value
     * @param \PocztaPolska\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @return \PocztaPolska\StructType\EPOInfoType
     */
    public function setDoreczeniePrzesylki(?\PocztaPolska\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null): self
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;
        
        return $this;
    }
    /**
     * Get zwrotPrzesylki value
     * @return \PocztaPolska\StructType\ZwrotPrzesylkiType|null
     */
    public function getZwrotPrzesylki(): ?\PocztaPolska\StructType\ZwrotPrzesylkiType
    {
        return $this->zwrotPrzesylki;
    }
    /**
     * Set zwrotPrzesylki value
     * @param \PocztaPolska\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     * @return \PocztaPolska\StructType\EPOInfoType
     */
    public function setZwrotPrzesylki(?\PocztaPolska\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null): self
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;
        
        return $this;
    }
}
