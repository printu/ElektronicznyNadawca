<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getJednostkaOrganizacyjna StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJednostkaOrganizacyjna extends AbstractStructBase
{
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\JednostkaOrganizacyjnaType|null
     */
    protected ?\PocztaPolska\StructType\JednostkaOrganizacyjnaType $jednostka = null;

    /**
     * Constructor method for getJednostkaOrganizacyjna
     * @uses GetJednostkaOrganizacyjna::setJednostka()
     * @param \PocztaPolska\StructType\JednostkaOrganizacyjnaType $jednostka
     */
    public function __construct(?\PocztaPolska\StructType\JednostkaOrganizacyjnaType $jednostka = null)
    {
        $this
            ->setJednostka($jednostka);
    }

    /**
     * Get jednostka value
     * @return \PocztaPolska\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostka(): ?\PocztaPolska\StructType\JednostkaOrganizacyjnaType
    {
        return $this->jednostka;
    }

    /**
     * Set jednostka value
     * @param \PocztaPolska\StructType\JednostkaOrganizacyjnaType $jednostka
     * @return \PocztaPolska\StructType\GetJednostkaOrganizacyjna
     */
    public function setJednostka(?\PocztaPolska\StructType\JednostkaOrganizacyjnaType $jednostka = null): self
    {
        $this->jednostka = $jednostka;

        return $this;
    }
}
