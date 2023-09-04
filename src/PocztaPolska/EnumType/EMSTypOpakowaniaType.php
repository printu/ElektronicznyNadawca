<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EMSTypOpakowaniaType EnumType
 * @subpackage Enumerations
 */
class EMSTypOpakowaniaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ZWYKLY'
     * @return string 'ZWYKLY'
     */
    const VALUE_ZWYKLY = 'ZWYKLY';
    /**
     * Constant for value 'DOKUMENT_PACK'
     * @return string 'DOKUMENT_PACK'
     */
    const VALUE_DOKUMENT_PACK = 'DOKUMENT_PACK';
    /**
     * Constant for value 'KILO_PACK'
     * @return string 'KILO_PACK'
     */
    const VALUE_KILO_PACK = 'KILO_PACK';
    /**
     * Return allowed values
     * @uses self::VALUE_ZWYKLY
     * @uses self::VALUE_DOKUMENT_PACK
     * @uses self::VALUE_KILO_PACK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ZWYKLY,
            self::VALUE_DOKUMENT_PACK,
            self::VALUE_KILO_PACK,
        ];
    }
}
