<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateProfil StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateProfil extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\ProfilType
     */
    protected \PocztaPolska\StructType\ProfilType $profil;
    /**
     * Constructor method for updateProfil
     * @uses UpdateProfil::setProfil()
     * @param \PocztaPolska\StructType\ProfilType $profil
     */
    public function __construct(\PocztaPolska\StructType\ProfilType $profil)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \PocztaPolska\StructType\ProfilType
     */
    public function getProfil(): \PocztaPolska\StructType\ProfilType
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \PocztaPolska\StructType\ProfilType $profil
     * @return \PocztaPolska\StructType\UpdateProfil
     */
    public function setProfil(\PocztaPolska\StructType\ProfilType $profil): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
