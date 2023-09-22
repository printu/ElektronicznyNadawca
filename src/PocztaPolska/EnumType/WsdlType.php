<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

/**
 * @subpackage Enumerations
 */
class WsdlType
{
    public const WSDL_FILE = '../../../wsdl/en.wsdl';
    public const WSDL_TEST_FILE = '../../../wsdl/test/en.wsdl';

    public static function getPath(bool $sandbox = false): string
    {
        if ($sandbox) {
            return realpath(__DIR__ . '/' . self::WSDL_TEST_FILE);
        }

        return realpath(__DIR__ . '/' . self::WSDL_FILE);
    }
}
