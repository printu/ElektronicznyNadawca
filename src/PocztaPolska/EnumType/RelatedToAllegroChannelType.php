<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for relatedToAllegroChannelType EnumType
 * @subpackage Enumerations
 */
class RelatedToAllegroChannelType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MS'
     * @return string 'MS'
     */
    const VALUE_MS = 'MS';
    /**
     * Constant for value 'WEB_API'
     * @return string 'WEB_API'
     */
    const VALUE_WEB_API = 'WEB_API';
    /**
     * Constant for value 'REST_API'
     * @return string 'REST_API'
     */
    const VALUE_REST_API = 'REST_API';
    /**
     * Return allowed values
     * @uses self::VALUE_MS
     * @uses self::VALUE_WEB_API
     * @uses self::VALUE_REST_API
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MS,
            self::VALUE_WEB_API,
            self::VALUE_REST_API,
        ];
    }
}
