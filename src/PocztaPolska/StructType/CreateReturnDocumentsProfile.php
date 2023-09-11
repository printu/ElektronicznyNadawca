<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createReturnDocumentsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateReturnDocumentsProfile extends AbstractStructBase
{
    /**
     * The profile
     * @var \PocztaPolska\StructType\ReturnDocumentProfileType|null
     */
    protected ?\PocztaPolska\StructType\ReturnDocumentProfileType $profile = null;

    /**
     * Constructor method for createReturnDocumentsProfile
     * @uses CreateReturnDocumentsProfile::setProfile()
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
     * @return \PocztaPolska\StructType\CreateReturnDocumentsProfile
     */
    public function setProfile(?\PocztaPolska\StructType\ReturnDocumentProfileType $profile = null): self
    {
        $this->profile = $profile;

        return $this;
    }
}
