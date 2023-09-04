<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for oczekiwanaGodzinaDoreczeniaType EnumType
 * @subpackage Enumerations
 */
class OczekiwanaGodzinaDoreczeniaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DO 08:00'
     * @return string 'DO 08:00'
     */
    public const VALUE_DO_08_00 = 'DO 08:00';
    /**
     * Constant for value 'DO 09:00'
     * @return string 'DO 09:00'
     */
    public const VALUE_DO_09_00 = 'DO 09:00';
    /**
     * Constant for value 'DO 12:00'
     * @return string 'DO 12:00'
     */
    public const VALUE_DO_12_00 = 'DO 12:00';
    /**
     * Constant for value 'NA 13:00'
     * @return string 'NA 13:00'
     */
    public const VALUE_NA_13_00 = 'NA 13:00';
    /**
     * Constant for value 'NA 14:00'
     * @return string 'NA 14:00'
     */
    public const VALUE_NA_14_00 = 'NA 14:00';
    /**
     * Constant for value 'NA 15:00'
     * @return string 'NA 15:00'
     */
    public const VALUE_NA_15_00 = 'NA 15:00';
    /**
     * Constant for value 'NA 16:00'
     * @return string 'NA 16:00'
     */
    public const VALUE_NA_16_00 = 'NA 16:00';
    /**
     * Constant for value 'NA 17:00'
     * @return string 'NA 17:00'
     */
    public const VALUE_NA_17_00 = 'NA 17:00';
    /**
     * Constant for value 'NA 18:00'
     * @return string 'NA 18:00'
     */
    public const VALUE_NA_18_00 = 'NA 18:00';
    /**
     * Constant for value 'NA 19:00'
     * @return string 'NA 19:00'
     */
    public const VALUE_NA_19_00 = 'NA 19:00';
    /**
     * Constant for value 'NA 20:00'
     * @return string 'NA 20:00'
     */
    public const VALUE_NA_20_00 = 'NA 20:00';

    /**
     * Return allowed values
     * @uses self::VALUE_DO_08_00
     * @uses self::VALUE_DO_09_00
     * @uses self::VALUE_DO_12_00
     * @uses self::VALUE_NA_13_00
     * @uses self::VALUE_NA_14_00
     * @uses self::VALUE_NA_15_00
     * @uses self::VALUE_NA_16_00
     * @uses self::VALUE_NA_17_00
     * @uses self::VALUE_NA_18_00
     * @uses self::VALUE_NA_19_00
     * @uses self::VALUE_NA_20_00
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DO_08_00,
            self::VALUE_DO_09_00,
            self::VALUE_DO_12_00,
            self::VALUE_NA_13_00,
            self::VALUE_NA_14_00,
            self::VALUE_NA_15_00,
            self::VALUE_NA_16_00,
            self::VALUE_NA_17_00,
            self::VALUE_NA_18_00,
            self::VALUE_NA_19_00,
            self::VALUE_NA_20_00,
        ];
    }
}
