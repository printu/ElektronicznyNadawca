<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PrintResolutionEnum EnumType
 * @subpackage Enumerations
 */
class PrintResolutionEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DPI_300'
     * @return string 'DPI_300'
     */
    const VALUE_DPI_300 = 'DPI_300';
    /**
     * Constant for value 'DPI_203'
     * @return string 'DPI_203'
     */
    const VALUE_DPI_203 = 'DPI_203';
    /**
     * Return allowed values
     * @uses self::VALUE_DPI_300
     * @uses self::VALUE_DPI_203
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DPI_300,
            self::VALUE_DPI_203,
        ];
    }
}
