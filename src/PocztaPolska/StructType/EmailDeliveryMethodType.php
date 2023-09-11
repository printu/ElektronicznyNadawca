<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for EmailDeliveryMethodType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EmailDeliveryMethodType extends DeliveryMethodType
{
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minLength: 6
     * - minOccurs: 1
     * @var string
     */
    protected string $email;

    /**
     * Constructor method for EmailDeliveryMethodType
     * @uses EmailDeliveryMethodType::setEmail()
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this
            ->setEmail($email);
    }

    /**
     * Get email value
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set email value
     * @param string $email
     * @return \PocztaPolska\StructType\EmailDeliveryMethodType
     */
    public function setEmail(string $email): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($email) && mb_strlen((string) $email) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $email)), __LINE__);
        }
        // validation for constraint: minLength(6)
        if (!is_null($email) && mb_strlen((string) $email) < 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 6', mb_strlen((string) $email)), __LINE__);
        }
        $this->email = $email;

        return $this;
    }
}
