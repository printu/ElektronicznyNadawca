<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PrintFormatEnum EnumType
 * @subpackage Enumerations
 */
class PrintFormatEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PDF_FORMAT'
     * @return string 'PDF_FORMAT'
     */
    public const VALUE_PDF_FORMAT = 'PDF_FORMAT';
    /**
     * Constant for value 'ZPL_FORMAT'
     * @return string 'ZPL_FORMAT'
     */
    public const VALUE_ZPL_FORMAT = 'ZPL_FORMAT';

    /**
     * Return allowed values
     * @uses self::VALUE_PDF_FORMAT
     * @uses self::VALUE_ZPL_FORMAT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PDF_FORMAT,
            self::VALUE_ZPL_FORMAT,
        ];
    }
}
