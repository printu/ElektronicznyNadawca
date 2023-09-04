<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typOpakowanieType EnumType
 * @subpackage Enumerations
 */
class TypOpakowanieType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'KL1'
     * @return string 'KL1'
     */
    const VALUE_KL_1 = 'KL1';
    /**
     * Constant for value 'KL2'
     * @return string 'KL2'
     */
    const VALUE_KL_2 = 'KL2';
    /**
     * Constant for value 'KL3'
     * @return string 'KL3'
     */
    const VALUE_KL_3 = 'KL3';
    /**
     * Constant for value 'S21'
     * @return string 'S21'
     */
    const VALUE_S_21 = 'S21';
    /**
     * Constant for value 'S22'
     * @return string 'S22'
     */
    const VALUE_S_22 = 'S22';
    /**
     * Constant for value 'S23'
     * @return string 'S23'
     */
    const VALUE_S_23 = 'S23';
    /**
     * Constant for value 'P31'
     * @return string 'P31'
     */
    const VALUE_P_31 = 'P31';
    /**
     * Constant for value 'P32'
     * @return string 'P32'
     */
    const VALUE_P_32 = 'P32';
    /**
     * Constant for value 'P33'
     * @return string 'P33'
     */
    const VALUE_P_33 = 'P33';
    /**
     * Constant for value 'SP41'
     * @return string 'SP41'
     */
    const VALUE_SP_41 = 'SP41';
    /**
     * Constant for value 'SP42'
     * @return string 'SP42'
     */
    const VALUE_SP_42 = 'SP42';
    /**
     * Constant for value 'WKL51'
     * @return string 'WKL51'
     */
    const VALUE_WKL_51 = 'WKL51';
    /**
     * Constant for value 'K1'
     * @return string 'K1'
     */
    const VALUE_K_1 = 'K1';
    /**
     * Constant for value 'K2'
     * @return string 'K2'
     */
    const VALUE_K_2 = 'K2';
    /**
     * Constant for value 'K3'
     * @return string 'K3'
     */
    const VALUE_K_3 = 'K3';
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Constant for value 'W'
     * @return string 'W'
     */
    const VALUE_W = 'W';
    /**
     * Return allowed values
     * @uses self::VALUE_KL_1
     * @uses self::VALUE_KL_2
     * @uses self::VALUE_KL_3
     * @uses self::VALUE_S_21
     * @uses self::VALUE_S_22
     * @uses self::VALUE_S_23
     * @uses self::VALUE_P_31
     * @uses self::VALUE_P_32
     * @uses self::VALUE_P_33
     * @uses self::VALUE_SP_41
     * @uses self::VALUE_SP_42
     * @uses self::VALUE_WKL_51
     * @uses self::VALUE_K_1
     * @uses self::VALUE_K_2
     * @uses self::VALUE_K_3
     * @uses self::VALUE_P
     * @uses self::VALUE_W
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_KL_1,
            self::VALUE_KL_2,
            self::VALUE_KL_3,
            self::VALUE_S_21,
            self::VALUE_S_22,
            self::VALUE_S_23,
            self::VALUE_P_31,
            self::VALUE_P_32,
            self::VALUE_P_33,
            self::VALUE_SP_41,
            self::VALUE_SP_42,
            self::VALUE_WKL_51,
            self::VALUE_K_1,
            self::VALUE_K_2,
            self::VALUE_K_3,
            self::VALUE_P,
            self::VALUE_W,
        ];
    }
}
