# ElektronicznyNadawca

PHP bindings for the e-nadawca Poczta Polska (https://e-nadawca.poczta-polska.pl/).

[API Documentation](https://e-nadawca.poczta-polska.pl/download/en_webapi_v87_20230620.zip)

## Installation

The API client can be installed via [Composer](https://github.com/composer/composer).

In your composer.json file:

```js
{
    "require": {
        "printu/elektroniczny-nadawca": "^14.0.0"
    }
}
```

Once the composer.json file is created you can run `composer install` for the initial package install and `composer update` to update to the latest version of the API client.

## Example

```php
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$reflector = new \ReflectionClass(WsdlType::class);
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => realpath(dirname($reflector->getFileName()) . '/' . WsdlType::WSDL_FILE);
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \PocztaPolska\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \PocztaPolska\ServiceType\Service($options);
/**
 * Sample call for addShipment operation/method
 */
if ($service->addShipment(new \PocztaPolska\StructType\AddShipment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
```

## License

MIT license. See the [LICENSE](LICENSE) file for more details.