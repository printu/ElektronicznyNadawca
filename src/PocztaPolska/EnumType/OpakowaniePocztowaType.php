<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for opakowaniePocztowaType EnumType
 * @subpackage Enumerations
 */
class OpakowaniePocztowaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PACZKA_DO_POL_KILO'
     * @return string 'PACZKA_DO_POL_KILO'
     */
    public const VALUE_PACZKA_DO_POL_KILO = 'PACZKA_DO_POL_KILO';
    /**
     * Constant for value 'FIRMOWA_DO_1KG'
     * @return string 'FIRMOWA_DO_1KG'
     */
    public const VALUE_FIRMOWA_DO_1_KG = 'FIRMOWA_DO_1KG';
    /**
     * Constant for value 'GABARYT_G1'
     * @return string 'GABARYT_G1'
     */
    public const VALUE_GABARYT_G_1 = 'GABARYT_G1';
    /**
     * Constant for value 'GABARYT_G2'
     * @return string 'GABARYT_G2'
     */
    public const VALUE_GABARYT_G_2 = 'GABARYT_G2';
    /**
     * Constant for value 'GABARYT_G3'
     * @return string 'GABARYT_G3'
     */
    public const VALUE_GABARYT_G_3 = 'GABARYT_G3';
    /**
     * Constant for value 'GABARYT_G4'
     * @return string 'GABARYT_G4'
     */
    public const VALUE_GABARYT_G_4 = 'GABARYT_G4';
    /**
     * Constant for value 'GABARYT_G5'
     * @return string 'GABARYT_G5'
     */
    public const VALUE_GABARYT_G_5 = 'GABARYT_G5';

    /**
     * Return allowed values
     * @uses self::VALUE_PACZKA_DO_POL_KILO
     * @uses self::VALUE_FIRMOWA_DO_1_KG
     * @uses self::VALUE_GABARYT_G_1
     * @uses self::VALUE_GABARYT_G_2
     * @uses self::VALUE_GABARYT_G_3
     * @uses self::VALUE_GABARYT_G_4
     * @uses self::VALUE_GABARYT_G_5
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PACZKA_DO_POL_KILO,
            self::VALUE_FIRMOWA_DO_1_KG,
            self::VALUE_GABARYT_G_1,
            self::VALUE_GABARYT_G_2,
            self::VALUE_GABARYT_G_3,
            self::VALUE_GABARYT_G_4,
            self::VALUE_GABARYT_G_5,
        ];
    }
}
