<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addRozbieznoscDoZapowiedziFaktur StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddRozbieznoscDoZapowiedziFaktur extends AbstractStructBase
{
    /**
     * The rozbieznosciZipFile
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 1
     * @var string[]
     */
    protected array $rozbieznosciZipFile;

    /**
     * Constructor method for addRozbieznoscDoZapowiedziFaktur
     * @uses AddRozbieznoscDoZapowiedziFaktur::setRozbieznosciZipFile()
     * @param string[] $rozbieznosciZipFile
     */
    public function __construct(array $rozbieznosciZipFile)
    {
        $this
            ->setRozbieznosciZipFile($rozbieznosciZipFile);
    }

    /**
     * Get rozbieznosciZipFile value
     * @return string[]
     */
    public function getRozbieznosciZipFile(): array
    {
        return $this->rozbieznosciZipFile;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setRozbieznosciZipFile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRozbieznosciZipFile method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRozbieznosciZipFileForArrayConstraintFromSetRozbieznosciZipFile(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addRozbieznoscDoZapowiedziFakturRozbieznosciZipFileItem) {
            // validation for constraint: itemType
            if (!is_string($addRozbieznoscDoZapowiedziFakturRozbieznosciZipFileItem)) {
                $invalidValues[] = is_object($addRozbieznoscDoZapowiedziFakturRozbieznosciZipFileItem) ? get_class($addRozbieznoscDoZapowiedziFakturRozbieznosciZipFileItem) : sprintf('%s(%s)', gettype($addRozbieznoscDoZapowiedziFakturRozbieznosciZipFileItem), var_export($addRozbieznoscDoZapowiedziFakturRozbieznosciZipFileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The rozbieznosciZipFile property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set rozbieznosciZipFile value
     * @throws InvalidArgumentException
     * @param string[] $rozbieznosciZipFile
     * @return \PocztaPolska\StructType\AddRozbieznoscDoZapowiedziFaktur
     */
    public function setRozbieznosciZipFile(array $rozbieznosciZipFile): self
    {
        // validation for constraint: array
        if ('' !== ($rozbieznosciZipFileArrayErrorMessage = self::validateRozbieznosciZipFileForArrayConstraintFromSetRozbieznosciZipFile($rozbieznosciZipFile))) {
            throw new InvalidArgumentException($rozbieznosciZipFileArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($rozbieznosciZipFile) && count($rozbieznosciZipFile) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($rozbieznosciZipFile)), __LINE__);
        }
        $this->rozbieznosciZipFile = $rozbieznosciZipFile;

        return $this;
    }

    /**
     * Add item to rozbieznosciZipFile value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\AddRozbieznoscDoZapowiedziFaktur
     */
    public function addToRozbieznosciZipFile(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The rozbieznosciZipFile property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->rozbieznosciZipFile) && count($this->rozbieznosciZipFile) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->rozbieznosciZipFile)), __LINE__);
        }
        $this->rozbieznosciZipFile[] = $item;

        return $this;
    }
}
