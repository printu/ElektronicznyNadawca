<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for uiszczaOplateType EnumType
 * @subpackage Enumerations
 */
class UiszczaOplateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NADAWCA'
     * @return string 'NADAWCA'
     */
    public const VALUE_NADAWCA = 'NADAWCA';
    /**
     * Constant for value 'ADRESAT'
     * @return string 'ADRESAT'
     */
    public const VALUE_ADRESAT = 'ADRESAT';

    /**
     * Return allowed values
     * @uses self::VALUE_NADAWCA
     * @uses self::VALUE_ADRESAT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NADAWCA,
            self::VALUE_ADRESAT,
        ];
    }
}
