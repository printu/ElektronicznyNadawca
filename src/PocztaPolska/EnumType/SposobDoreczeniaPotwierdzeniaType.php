<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobDoreczeniaPotwierdzeniaType EnumType
 * @subpackage Enumerations
 */
class SposobDoreczeniaPotwierdzeniaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TELEFON'
     * @return string 'TELEFON'
     */
    public const VALUE_TELEFON = 'TELEFON';
    /**
     * Constant for value 'TELEFAX'
     * @return string 'TELEFAX'
     */
    public const VALUE_TELEFAX = 'TELEFAX';
    /**
     * Constant for value 'SMS'
     * @return string 'SMS'
     */
    public const VALUE_SMS = 'SMS';
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    public const VALUE_EMAIL = 'EMAIL';

    /**
     * Return allowed values
     * @uses self::VALUE_TELEFON
     * @uses self::VALUE_TELEFAX
     * @uses self::VALUE_SMS
     * @uses self::VALUE_EMAIL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TELEFON,
            self::VALUE_TELEFAX,
            self::VALUE_SMS,
            self::VALUE_EMAIL,
        ];
    }
}
