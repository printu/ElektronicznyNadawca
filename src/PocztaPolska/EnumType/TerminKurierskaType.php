<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for terminKurierskaType EnumType
 * @subpackage Enumerations
 */
class TerminKurierskaType extends AbstractStructEnumBase
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
     * Constant for value 'MIEJSKI_DO_4H_DO_10KM'
     * @return string 'MIEJSKI_DO_4H_DO_10KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_10_KM = 'MIEJSKI_DO_4H_DO_10KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_15KM'
     * @return string 'MIEJSKI_DO_4H_DO_15KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_15_KM = 'MIEJSKI_DO_4H_DO_15KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_20KM'
     * @return string 'MIEJSKI_DO_4H_DO_20KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_20_KM = 'MIEJSKI_DO_4H_DO_20KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_30KM'
     * @return string 'MIEJSKI_DO_4H_DO_30KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_30_KM = 'MIEJSKI_DO_4H_DO_30KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_40KM'
     * @return string 'MIEJSKI_DO_4H_DO_40KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_40_KM = 'MIEJSKI_DO_4H_DO_40KM';
    /**
     * Constant for value 'KRAJOWY'
     * @return string 'KRAJOWY'
     */
    const VALUE_KRAJOWY = 'KRAJOWY';
    /**
     * Constant for value 'BEZPOSREDNI_DO_20KG'
     * @return string 'BEZPOSREDNI_DO_20KG'
     */
    const VALUE_BEZPOSREDNI_DO_20_KG = 'BEZPOSREDNI_DO_20KG';
    /**
     * Constant for value 'BEZPOSREDNI_OD_20KG_DO_30KG'
     * @return string 'BEZPOSREDNI_OD_20KG_DO_30KG'
     */
    const VALUE_BEZPOSREDNI_OD_20_KG_DO_30_KG = 'BEZPOSREDNI_OD_20KG_DO_30KG';
    /**
     * Constant for value 'BEZPOSREDNI_OD_30KG_DO_100KG'
     * @return string 'BEZPOSREDNI_OD_30KG_DO_100KG'
     */
    const VALUE_BEZPOSREDNI_OD_30_KG_DO_100_KG = 'BEZPOSREDNI_OD_30KG_DO_100KG';
    /**
     * Constant for value 'EKSPRES24'
     * @return string 'EKSPRES24'
     */
    const VALUE_EKSPRES_24 = 'EKSPRES24';
    /**
     * Return allowed values
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_5_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_10_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_15_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_10_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_15_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_20_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_30_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_40_KM
     * @uses self::VALUE_KRAJOWY
     * @uses self::VALUE_BEZPOSREDNI_DO_20_KG
     * @uses self::VALUE_BEZPOSREDNI_OD_20_KG_DO_30_KG
     * @uses self::VALUE_BEZPOSREDNI_OD_30_KG_DO_100_KG
     * @uses self::VALUE_EKSPRES_24
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MIEJSKI_DO_3_H_DO_5_KM,
            self::VALUE_MIEJSKI_DO_3_H_DO_10_KM,
            self::VALUE_MIEJSKI_DO_3_H_DO_15_KM,
            self::VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_10_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_15_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_20_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_30_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_40_KM,
            self::VALUE_KRAJOWY,
            self::VALUE_BEZPOSREDNI_DO_20_KG,
            self::VALUE_BEZPOSREDNI_OD_20_KG_DO_30_KG,
            self::VALUE_BEZPOSREDNI_OD_30_KG_DO_100_KG,
            self::VALUE_EKSPRES_24,
        ];
    }
}
