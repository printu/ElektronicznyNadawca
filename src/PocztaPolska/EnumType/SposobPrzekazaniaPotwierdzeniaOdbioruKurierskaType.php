<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType
 * EnumType
 * @subpackage Enumerations
 */
class SposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_5KM'
     * @return string 'MIEJSKI_DO_3H_DO_5KM'
     */
    const VALUE_MIEJSKI_DO_3_H_DO_5_KM = 'MIEJSKI_DO_3H_DO_5KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_10KM'
     * @return string 'MIEJSKI_DO_3H_DO_10KM'
     */
    const VALUE_MIEJSKI_DO_3_H_DO_10_KM = 'MIEJSKI_DO_3H_DO_10KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_15KM'
     * @return string 'MIEJSKI_DO_3H_DO_15KM'
     */
    const VALUE_MIEJSKI_DO_3_H_DO_15_KM = 'MIEJSKI_DO_3H_DO_15KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_POWYZEJ_15KM'
     * @return string 'MIEJSKI_DO_3H_POWYZEJ_15KM'
     */
    const VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    /**
     * Constant for value 'BEZPOSREDNI_DO_20KG'
     * @return string 'BEZPOSREDNI_DO_20KG'
     */
    const VALUE_BEZPOSREDNI_DO_20_KG = 'BEZPOSREDNI_DO_20KG';
    /**
     * Constant for value 'EKSPRES24'
     * @return string 'EKSPRES24'
     */
    const VALUE_EKSPRES_24 = 'EKSPRES24';
    /**
     * Constant for value 'LIST_ZWYKLY_PRIORYTETOWY'
     * @return string 'LIST_ZWYKLY_PRIORYTETOWY'
     */
    const VALUE_LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
    /**
     * Return allowed values
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_5_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_10_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_15_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM
     * @uses self::VALUE_BEZPOSREDNI_DO_20_KG
     * @uses self::VALUE_EKSPRES_24
     * @uses self::VALUE_LIST_ZWYKLY_PRIORYTETOWY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MIEJSKI_DO_3_H_DO_5_KM,
            self::VALUE_MIEJSKI_DO_3_H_DO_10_KM,
            self::VALUE_MIEJSKI_DO_3_H_DO_15_KM,
            self::VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM,
            self::VALUE_BEZPOSREDNI_DO_20_KG,
            self::VALUE_EKSPRES_24,
            self::VALUE_LIST_ZWYKLY_PRIORYTETOWY,
        ];
    }
}
