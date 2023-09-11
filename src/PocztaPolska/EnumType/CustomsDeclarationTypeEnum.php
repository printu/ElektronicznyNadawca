<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CustomsDeclarationTypeEnum EnumType
 * @subpackage Enumerations
 */
class CustomsDeclarationTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CN22'
     * @return string 'CN22'
     */
    public const VALUE_CN_22 = 'CN22';
    /**
     * Constant for value 'CN23'
     * @return string 'CN23'
     */
    public const VALUE_CN_23 = 'CN23';

    /**
     * Return allowed values
     * @uses self::VALUE_CN_22
     * @uses self::VALUE_CN_23
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CN_22,
            self::VALUE_CN_23,
        ];
    }
}
