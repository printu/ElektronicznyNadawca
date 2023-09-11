<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getZapowiedziFakturResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetZapowiedziFakturResponse extends AbstractStructBase
{
    /**
     * The zapowiedzFakturyZipFile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $zapowiedzFakturyZipFile = null;

    /**
     * Constructor method for getZapowiedziFakturResponse
     * @uses GetZapowiedziFakturResponse::setZapowiedzFakturyZipFile()
     * @param string[] $zapowiedzFakturyZipFile
     */
    public function __construct(?array $zapowiedzFakturyZipFile = null)
    {
        $this
            ->setZapowiedzFakturyZipFile($zapowiedzFakturyZipFile);
    }

    /**
     * Get zapowiedzFakturyZipFile value
     * @return string[]
     */
    public function getZapowiedzFakturyZipFile(): ?array
    {
        return $this->zapowiedzFakturyZipFile;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setZapowiedzFakturyZipFile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setZapowiedzFakturyZipFile method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateZapowiedzFakturyZipFileForArrayConstraintFromSetZapowiedzFakturyZipFile(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getZapowiedziFakturResponseZapowiedzFakturyZipFileItem) {
            // validation for constraint: itemType
            if (!is_string($getZapowiedziFakturResponseZapowiedzFakturyZipFileItem)) {
                $invalidValues[] = is_object($getZapowiedziFakturResponseZapowiedzFakturyZipFileItem) ? get_class($getZapowiedziFakturResponseZapowiedzFakturyZipFileItem) : sprintf('%s(%s)', gettype($getZapowiedziFakturResponseZapowiedzFakturyZipFileItem), var_export($getZapowiedziFakturResponseZapowiedzFakturyZipFileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The zapowiedzFakturyZipFile property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set zapowiedzFakturyZipFile value
     * @throws InvalidArgumentException
     * @param string[] $zapowiedzFakturyZipFile
     * @return \PocztaPolska\StructType\GetZapowiedziFakturResponse
     */
    public function setZapowiedzFakturyZipFile(?array $zapowiedzFakturyZipFile = null): self
    {
        // validation for constraint: array
        if ('' !== ($zapowiedzFakturyZipFileArrayErrorMessage = self::validateZapowiedzFakturyZipFileForArrayConstraintFromSetZapowiedzFakturyZipFile($zapowiedzFakturyZipFile))) {
            throw new InvalidArgumentException($zapowiedzFakturyZipFileArrayErrorMessage, __LINE__);
        }
        $this->zapowiedzFakturyZipFile = $zapowiedzFakturyZipFile;

        return $this;
    }

    /**
     * Add item to zapowiedzFakturyZipFile value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\GetZapowiedziFakturResponse
     */
    public function addToZapowiedzFakturyZipFile(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The zapowiedzFakturyZipFile property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->zapowiedzFakturyZipFile[] = $item;

        return $this;
    }
}
