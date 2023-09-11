<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobZwrotuType EnumType
 * @subpackage Enumerations
 */
class SposobZwrotuType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LADOWO_MORSKA'
     * @return string 'LADOWO_MORSKA'
     */
    public const VALUE_LADOWO_MORSKA = 'LADOWO_MORSKA';
    /**
     * Constant for value 'LOTNICZA'
     * @return string 'LOTNICZA'
     */
    public const VALUE_LOTNICZA = 'LOTNICZA';

    /**
     * Return allowed values
     * @uses self::VALUE_LADOWO_MORSKA
     * @uses self::VALUE_LOTNICZA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LADOWO_MORSKA,
            self::VALUE_LOTNICZA,
        ];
    }
}
