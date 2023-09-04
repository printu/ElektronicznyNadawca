<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobPrzekazaniaPotwierdzeniaBiznesowaType EnumType
 * @subpackage Enumerations
 */
class SposobPrzekazaniaPotwierdzeniaBiznesowaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LIST_ZWYKLY_PRIORYTETOWY'
     * @return string 'LIST_ZWYKLY_PRIORYTETOWY'
     */
    public const VALUE_LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
    /**
     * Constant for value 'EKSPRES24'
     * @return string 'EKSPRES24'
     */
    public const VALUE_EKSPRES_24 = 'EKSPRES24';

    /**
     * Return allowed values
     * @uses self::VALUE_LIST_ZWYKLY_PRIORYTETOWY
     * @uses self::VALUE_EKSPRES_24
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LIST_ZWYKLY_PRIORYTETOWY,
            self::VALUE_EKSPRES_24,
        ];
    }
}
