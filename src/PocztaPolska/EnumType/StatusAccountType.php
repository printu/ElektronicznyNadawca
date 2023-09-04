<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for statusAccountType EnumType
 * @subpackage Enumerations
 */
class StatusAccountType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WYLACZONY'
     * @return string 'WYLACZONY'
     */
    const VALUE_WYLACZONY = 'WYLACZONY';
    /**
     * Constant for value 'ZABLOKOWANY'
     * @return string 'ZABLOKOWANY'
     */
    const VALUE_ZABLOKOWANY = 'ZABLOKOWANY';
    /**
     * Constant for value 'ODBLOKOWANY'
     * @return string 'ODBLOKOWANY'
     */
    const VALUE_ODBLOKOWANY = 'ODBLOKOWANY';
    /**
     * Return allowed values
     * @uses self::VALUE_WYLACZONY
     * @uses self::VALUE_ZABLOKOWANY
     * @uses self::VALUE_ODBLOKOWANY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WYLACZONY,
            self::VALUE_ZABLOKOWANY,
            self::VALUE_ODBLOKOWANY,
        ];
    }
}
