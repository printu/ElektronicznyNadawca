<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for gabarytBiznesowaType EnumType
 * Meta information extracted from the WSDL
 * - documentation: gabaryt Maksymalne wymiary przesyłki (w cm) XS 25,0 x 20,0 x 10,0 S 30,0 x 25,0 x 15,0 M 35,0 x 30,0 x 20,0 L 45,0 x 35,0 x 25,0 XL 60,0 x 50,0 x 30,0 XXL 90,0 x 60,0 x 35,0
 * @subpackage Enumerations
 */
class GabarytBiznesowaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'XS'
     * @return string 'XS'
     */
    const VALUE_XS = 'XS';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    const VALUE_L = 'L';
    /**
     * Constant for value 'XL'
     * @return string 'XL'
     */
    const VALUE_XL = 'XL';
    /**
     * Constant for value 'XXL'
     * @return string 'XXL'
     */
    const VALUE_XXL = 'XXL';
    /**
     * Return allowed values
     * @uses self::VALUE_XS
     * @uses self::VALUE_S
     * @uses self::VALUE_M
     * @uses self::VALUE_L
     * @uses self::VALUE_XL
     * @uses self::VALUE_XXL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_XS,
            self::VALUE_S,
            self::VALUE_M,
            self::VALUE_L,
            self::VALUE_XL,
            self::VALUE_XXL,
        ];
    }
}
