<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eSposobPowiadomieniaType EnumType
 * @subpackage Enumerations
 */
class ESposobPowiadomieniaType extends AbstractStructEnumBase
{
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
     * @uses self::VALUE_SMS
     * @uses self::VALUE_EMAIL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SMS,
            self::VALUE_EMAIL,
        ];
    }
}
