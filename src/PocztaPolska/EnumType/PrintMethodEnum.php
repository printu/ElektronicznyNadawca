<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PrintMethodEnum EnumType
 * @subpackage Enumerations
 */
class PrintMethodEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EACH_PARCEL_SEPARATELY'
     * @return string 'EACH_PARCEL_SEPARATELY'
     */
    public const VALUE_EACH_PARCEL_SEPARATELY = 'EACH_PARCEL_SEPARATELY';
    /**
     * Constant for value 'ALL_PARCELS_IN_ONE_FILE'
     * @return string 'ALL_PARCELS_IN_ONE_FILE'
     */
    public const VALUE_ALL_PARCELS_IN_ONE_FILE = 'ALL_PARCELS_IN_ONE_FILE';

    /**
     * Return allowed values
     * @uses self::VALUE_EACH_PARCEL_SEPARATELY
     * @uses self::VALUE_ALL_PARCELS_IN_ONE_FILE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EACH_PARCEL_SEPARATELY,
            self::VALUE_ALL_PARCELS_IN_ONE_FILE,
        ];
    }
}
