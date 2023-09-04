<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobPrzekazaniaType EnumType
 * @subpackage Enumerations
 */
class SposobPrzekazaniaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LIST_ZWYKLY_PRIOTYTET'
     * @return string 'LIST_ZWYKLY_PRIOTYTET'
     */
    const VALUE_LIST_ZWYKLY_PRIOTYTET = 'LIST_ZWYKLY_PRIOTYTET';
    /**
     * Constant for value 'POCZTEX'
     * @return string 'POCZTEX'
     */
    const VALUE_POCZTEX = 'POCZTEX';
    /**
     * Return allowed values
     * @uses self::VALUE_LIST_ZWYKLY_PRIOTYTET
     * @uses self::VALUE_POCZTEX
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LIST_ZWYKLY_PRIOTYTET,
            self::VALUE_POCZTEX,
        ];
    }
}
