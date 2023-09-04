<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for rozstrzygniecieType EnumType
 * @subpackage Enumerations
 */
class RozstrzygniecieType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UZASADNIONA'
     * @return string 'UZASADNIONA'
     */
    const VALUE_UZASADNIONA = 'UZASADNIONA';
    /**
     * Constant for value 'NIEUZASADNIONA'
     * @return string 'NIEUZASADNIONA'
     */
    const VALUE_NIEUZASADNIONA = 'NIEUZASADNIONA';
    /**
     * Constant for value 'NIEWNIESIONA'
     * @return string 'NIEWNIESIONA'
     */
    const VALUE_NIEWNIESIONA = 'NIEWNIESIONA';
    /**
     * Return allowed values
     * @uses self::VALUE_UZASADNIONA
     * @uses self::VALUE_NIEUZASADNIONA
     * @uses self::VALUE_NIEWNIESIONA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UZASADNIONA,
            self::VALUE_NIEUZASADNIONA,
            self::VALUE_NIEWNIESIONA,
        ];
    }
}
