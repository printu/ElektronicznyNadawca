<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for terminZwrotDokumentowKurierskaType EnumType
 * @subpackage Enumerations
 */
class TerminZwrotDokumentowKurierskaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_5KM'
     * @return string 'MIEJSKI_DO_3H_DO_5KM'
     */
    public const VALUE_MIEJSKI_DO_3_H_DO_5_KM = 'MIEJSKI_DO_3H_DO_5KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_10KM'
     * @return string 'MIEJSKI_DO_3H_DO_10KM'
     */
    public const VALUE_MIEJSKI_DO_3_H_DO_10_KM = 'MIEJSKI_DO_3H_DO_10KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_15KM'
     * @return string 'MIEJSKI_DO_3H_DO_15KM'
     */
    public const VALUE_MIEJSKI_DO_3_H_DO_15_KM = 'MIEJSKI_DO_3H_DO_15KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_POWYZEJ_15KM'
     * @return string 'MIEJSKI_DO_3H_POWYZEJ_15KM'
     */
    public const VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    /**
     * Constant for value 'BEZPOSREDNI_DO_20KG'
     * @return string 'BEZPOSREDNI_DO_20KG'
     */
    public const VALUE_BEZPOSREDNI_DO_20_KG = 'BEZPOSREDNI_DO_20KG';
    /**
     * Constant for value 'EKSPRES24'
     * @return string 'EKSPRES24'
     */
    public const VALUE_EKSPRES_24 = 'EKSPRES24';

    /**
     * Return allowed values
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_5_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_10_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_15_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM
     * @uses self::VALUE_BEZPOSREDNI_DO_20_KG
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
            self::VALUE_BEZPOSREDNI_DO_20_KG,
            self::VALUE_EKSPRES_24,
        ];
    }
}
