<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createAccount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAccount extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\AccountType
     */
    protected \PocztaPolska\StructType\AccountType $account;
    /**
     * Constructor method for createAccount
     * @uses CreateAccount::setAccount()
     * @param \PocztaPolska\StructType\AccountType $account
     */
    public function __construct(\PocztaPolska\StructType\AccountType $account)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \PocztaPolska\StructType\AccountType
     */
    public function getAccount(): \PocztaPolska\StructType\AccountType
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \PocztaPolska\StructType\AccountType $account
     * @return \PocztaPolska\StructType\CreateAccount
     */
    public function setAccount(\PocztaPolska\StructType\AccountType $account): self
    {
        $this->account = $account;
        
        return $this;
    }
}
