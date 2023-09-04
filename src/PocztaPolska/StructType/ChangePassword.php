<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changePassword StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChangePassword extends AbstractStructBase
{
    /**
     * The newPassword
     * @var string|null
     */
    protected ?string $newPassword = null;
    /**
     * Constructor method for changePassword
     * @uses ChangePassword::setNewPassword()
     * @param string $newPassword
     */
    public function __construct(?string $newPassword = null)
    {
        $this
            ->setNewPassword($newPassword);
    }
    /**
     * Get newPassword value
     * @return string|null
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }
    /**
     * Set newPassword value
     * @param string $newPassword
     * @return \PocztaPolska\StructType\ChangePassword
     */
    public function setNewPassword(?string $newPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($newPassword) && !is_string($newPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newPassword, true), gettype($newPassword)), __LINE__);
        }
        $this->newPassword = $newPassword;
        
        return $this;
    }
}
