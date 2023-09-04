<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for formatPocztex2021Type EnumType
 * Meta information extracted from the WSDL
 * - documentation: Format przesyłki: S - M - L - XL - 2XL -
 * @subpackage Enumerations
 */
class FormatPocztex2021Type extends AbstractStructEnumBase
{
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    public const VALUE_S = 'S';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    public const VALUE_M = 'M';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    public const VALUE_L = 'L';
    /**
     * Constant for value 'XL'
     * @return string 'XL'
     */
    public const VALUE_XL = 'XL';
    /**
     * Constant for value '2XL'
     * @return string '2XL'
     */
    public const VALUE_2_XL = '2XL';

    /**
     * Return allowed values
     * @uses self::VALUE_S
     * @uses self::VALUE_M
     * @uses self::VALUE_L
     * @uses self::VALUE_XL
     * @uses self::VALUE_2_XL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_S,
            self::VALUE_M,
            self::VALUE_L,
            self::VALUE_XL,
            self::VALUE_2_XL,
        ];
    }
}
