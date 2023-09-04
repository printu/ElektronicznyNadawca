<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for statusEPOEnum EnumType
 * @subpackage Enumerations
 */
class StatusEPOEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'NADANIE'
     * @return string 'NADANIE'
     */
    const VALUE_NADANIE = 'NADANIE';
    /**
     * Constant for value 'W_TRANSPORCIE'
     * @return string 'W_TRANSPORCIE'
     */
    const VALUE_W_TRANSPORCIE = 'W_TRANSPORCIE';
    /**
     * Constant for value 'CLO'
     * @return string 'CLO'
     */
    const VALUE_CLO = 'CLO';
    /**
     * Constant for value 'SMS'
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
    /**
     * Constant for value 'W_DORECZENIU'
     * @return string 'W_DORECZENIU'
     */
    const VALUE_W_DORECZENIU = 'W_DORECZENIU';
    /**
     * Constant for value 'AWIZO'
     * @return string 'AWIZO'
     */
    const VALUE_AWIZO = 'AWIZO';
    /**
     * Constant for value 'PONOWNE_AWIZO'
     * @return string 'PONOWNE_AWIZO'
     */
    const VALUE_PONOWNE_AWIZO = 'PONOWNE_AWIZO';
    /**
     * Constant for value 'ZWROT'
     * @return string 'ZWROT'
     */
    const VALUE_ZWROT = 'ZWROT';
    /**
     * Constant for value 'DORECZONA'
     * @return string 'DORECZONA'
     */
    const VALUE_DORECZONA = 'DORECZONA';
    /**
     * Return allowed values
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_NADANIE
     * @uses self::VALUE_W_TRANSPORCIE
     * @uses self::VALUE_CLO
     * @uses self::VALUE_SMS
     * @uses self::VALUE_W_DORECZENIU
     * @uses self::VALUE_AWIZO
     * @uses self::VALUE_PONOWNE_AWIZO
     * @uses self::VALUE_ZWROT
     * @uses self::VALUE_DORECZONA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ERROR,
            self::VALUE_NADANIE,
            self::VALUE_W_TRANSPORCIE,
            self::VALUE_CLO,
            self::VALUE_SMS,
            self::VALUE_W_DORECZENIU,
            self::VALUE_AWIZO,
            self::VALUE_PONOWNE_AWIZO,
            self::VALUE_ZWROT,
            self::VALUE_DORECZONA,
        ];
    }
}
