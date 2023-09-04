<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobNadaniaType EnumType
 * @subpackage Enumerations
 */
class SposobNadaniaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WERYFIKACJA_WEZEL_DOCELOWY'
     * @return string 'WERYFIKACJA_WEZEL_DOCELOWY'
     */
    const VALUE_WERYFIKACJA_WEZEL_DOCELOWY = 'WERYFIKACJA_WEZEL_DOCELOWY';
    /**
     * Constant for value 'WERYFIKACJA_WEZEL_NADAWCZY'
     * @return string 'WERYFIKACJA_WEZEL_NADAWCZY'
     */
    const VALUE_WERYFIKACJA_WEZEL_NADAWCZY = 'WERYFIKACJA_WEZEL_NADAWCZY';
    /**
     * Return allowed values
     * @uses self::VALUE_WERYFIKACJA_WEZEL_DOCELOWY
     * @uses self::VALUE_WERYFIKACJA_WEZEL_NADAWCZY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WERYFIKACJA_WEZEL_DOCELOWY,
            self::VALUE_WERYFIKACJA_WEZEL_NADAWCZY,
        ];
    }
}
