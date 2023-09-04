<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteReturnDocumentsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteReturnDocumentsProfile extends AbstractStructBase
{
    /**
     * The idProfile
     * @var int|null
     */
    protected ?int $idProfile = null;

    /**
     * Constructor method for deleteReturnDocumentsProfile
     * @uses DeleteReturnDocumentsProfile::setIdProfile()
     * @param int $idProfile
     */
    public function __construct(?int $idProfile = null)
    {
        $this
            ->setIdProfile($idProfile);
    }

    /**
     * Get idProfile value
     * @return int|null
     */
    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }

    /**
     * Set idProfile value
     * @param int $idProfile
     * @return \PocztaPolska\StructType\DeleteReturnDocumentsProfile
     */
    public function setIdProfile(?int $idProfile = null): self
    {
        // validation for constraint: int
        if (!is_null($idProfile) && !(is_int($idProfile) || ctype_digit($idProfile))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idProfile, true), gettype($idProfile)), __LINE__);
        }
        $this->idProfile = $idProfile;

        return $this;
    }
}
