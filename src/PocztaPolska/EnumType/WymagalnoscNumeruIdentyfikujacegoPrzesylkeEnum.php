<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for wymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum EnumType
 * @subpackage Enumerations
 */
class WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BRAK'
     * @return string 'BRAK'
     */
    public const VALUE_BRAK = 'BRAK';
    /**
     * Constant for value 'WYMAGANY'
     * @return string 'WYMAGANY'
     */
    public const VALUE_WYMAGANY = 'WYMAGANY';
    /**
     * Constant for value 'NIEWYMAGANY'
     * @return string 'NIEWYMAGANY'
     */
    public const VALUE_NIEWYMAGANY = 'NIEWYMAGANY';

    /**
     * Return allowed values
     * @uses self::VALUE_BRAK
     * @uses self::VALUE_WYMAGANY
     * @uses self::VALUE_NIEWYMAGANY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BRAK,
            self::VALUE_WYMAGANY,
            self::VALUE_NIEWYMAGANY,
        ];
    }
}
