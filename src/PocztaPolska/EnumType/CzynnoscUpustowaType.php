<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for czynnoscUpustowaType EnumType
 * @subpackage Enumerations
 */
class CzynnoscUpustowaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'POSORTOWANA'
     * @return string 'POSORTOWANA'
     */
    public const VALUE_POSORTOWANA = 'POSORTOWANA';

    /**
     * Return allowed values
     * @uses self::VALUE_POSORTOWANA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POSORTOWANA,
        ];
    }
}
