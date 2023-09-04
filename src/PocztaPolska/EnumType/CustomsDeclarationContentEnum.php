<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CustomsDeclarationContentEnum EnumType
 * @subpackage Enumerations
 */
class CustomsDeclarationContentEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'GOODS_SALE'
     * @return string 'GOODS_SALE'
     */
    const VALUE_GOODS_SALE = 'GOODS_SALE';
    /**
     * Constant for value 'GOODS_RETURN'
     * @return string 'GOODS_RETURN'
     */
    const VALUE_GOODS_RETURN = 'GOODS_RETURN';
    /**
     * Constant for value 'GIFT'
     * @return string 'GIFT'
     */
    const VALUE_GIFT = 'GIFT';
    /**
     * Constant for value 'COMMERCIAL_SAMPLE'
     * @return string 'COMMERCIAL_SAMPLE'
     */
    const VALUE_COMMERCIAL_SAMPLE = 'COMMERCIAL_SAMPLE';
    /**
     * Constant for value 'DOCUMENT'
     * @return string 'DOCUMENT'
     */
    const VALUE_DOCUMENT = 'DOCUMENT';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Return allowed values
     * @uses self::VALUE_GOODS_SALE
     * @uses self::VALUE_GOODS_RETURN
     * @uses self::VALUE_GIFT
     * @uses self::VALUE_COMMERCIAL_SAMPLE
     * @uses self::VALUE_DOCUMENT
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GOODS_SALE,
            self::VALUE_GOODS_RETURN,
            self::VALUE_GIFT,
            self::VALUE_COMMERCIAL_SAMPLE,
            self::VALUE_DOCUMENT,
            self::VALUE_OTHER,
        ];
    }
}
