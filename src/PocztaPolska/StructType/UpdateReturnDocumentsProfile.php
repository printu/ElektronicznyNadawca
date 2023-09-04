<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateReturnDocumentsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateReturnDocumentsProfile extends AbstractStructBase
{
    /**
     * The profile
     * @var \PocztaPolska\StructType\ReturnDocumentProfileType|null
     */
    protected ?\PocztaPolska\StructType\ReturnDocumentProfileType $profile = null;
    /**
     * Constructor method for updateReturnDocumentsProfile
     * @uses UpdateReturnDocumentsProfile::setProfile()
     * @param \PocztaPolska\StructType\ReturnDocumentProfileType $profile
     */
    public function __construct(?\PocztaPolska\StructType\ReturnDocumentProfileType $profile = null)
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get profile value
     * @return \PocztaPolska\StructType\ReturnDocumentProfileType|null
     */
    public function getProfile(): ?\PocztaPolska\StructType\ReturnDocumentProfileType
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param \PocztaPolska\StructType\ReturnDocumentProfileType $profile
     * @return \PocztaPolska\StructType\UpdateReturnDocumentsProfile
     */
    public function setProfile(?\PocztaPolska\StructType\ReturnDocumentProfileType $profile = null): self
    {
        $this->profile = $profile;
        
        return $this;
    }
}
