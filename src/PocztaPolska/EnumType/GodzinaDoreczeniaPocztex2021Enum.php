<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for godzinaDoreczeniaPocztex2021Enum EnumType
 * @subpackage Enumerations
 */
class GodzinaDoreczeniaPocztex2021Enum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DO_GODZ_8'
     * @return string 'DO_GODZ_8'
     */
    const VALUE_DO_GODZ_8 = 'DO_GODZ_8';
    /**
     * Constant for value 'DO_GODZ_9'
     * @return string 'DO_GODZ_9'
     */
    const VALUE_DO_GODZ_9 = 'DO_GODZ_9';
    /**
     * Constant for value 'DO_GODZ_12'
     * @return string 'DO_GODZ_12'
     */
    const VALUE_DO_GODZ_12 = 'DO_GODZ_12';
    /**
     * Constant for value 'PO_GODZ_17'
     * @return string 'PO_GODZ_17'
     */
    const VALUE_PO_GODZ_17 = 'PO_GODZ_17';
    /**
     * Return allowed values
     * @uses self::VALUE_DO_GODZ_8
     * @uses self::VALUE_DO_GODZ_9
     * @uses self::VALUE_DO_GODZ_12
     * @uses self::VALUE_PO_GODZ_17
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DO_GODZ_8,
            self::VALUE_DO_GODZ_9,
            self::VALUE_DO_GODZ_12,
            self::VALUE_PO_GODZ_17,
        ];
    }
}
