<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum
 * EnumType
 * @subpackage Enumerations
 */
class SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'POCZTEX_KURIER'
     * @return string 'POCZTEX_KURIER'
     */
    const VALUE_POCZTEX_KURIER = 'POCZTEX_KURIER';
    /**
     * Constant for value 'DRUK_24'
     * @return string 'DRUK_24'
     */
    const VALUE_DRUK_24 = 'DRUK_24';
    /**
     * Return allowed values
     * @uses self::VALUE_POCZTEX_KURIER
     * @uses self::VALUE_DRUK_24
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POCZTEX_KURIER,
            self::VALUE_DRUK_24,
        ];
    }
}
