<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createParcelContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateParcelContent extends AbstractStructBase
{
    /**
     * The parcelContent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\ParcelContentType[]
     */
    protected array $parcelContent;
    /**
     * Constructor method for createParcelContent
     * @uses CreateParcelContent::setParcelContent()
     * @param \PocztaPolska\StructType\ParcelContentType[] $parcelContent
     */
    public function __construct(array $parcelContent)
    {
        $this
            ->setParcelContent($parcelContent);
    }
    /**
     * Get parcelContent value
     * @return \PocztaPolska\StructType\ParcelContentType[]
     */
    public function getParcelContent(): array
    {
        return $this->parcelContent;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setParcelContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelContent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelContentForArrayConstraintFromSetParcelContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createParcelContentParcelContentItem) {
            // validation for constraint: itemType
            if (!$createParcelContentParcelContentItem instanceof \PocztaPolska\StructType\ParcelContentType) {
                $invalidValues[] = is_object($createParcelContentParcelContentItem) ? get_class($createParcelContentParcelContentItem) : sprintf('%s(%s)', gettype($createParcelContentParcelContentItem), var_export($createParcelContentParcelContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parcelContent property can only contain items of type \PocztaPolska\StructType\ParcelContentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set parcelContent value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ParcelContentType[] $parcelContent
     * @return \PocztaPolska\StructType\CreateParcelContent
     */
    public function setParcelContent(array $parcelContent): self
    {
        // validation for constraint: array
        if ('' !== ($parcelContentArrayErrorMessage = self::validateParcelContentForArrayConstraintFromSetParcelContent($parcelContent))) {
            throw new InvalidArgumentException($parcelContentArrayErrorMessage, __LINE__);
        }
        $this->parcelContent = $parcelContent;
        
        return $this;
    }
    /**
     * Add item to parcelContent value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ParcelContentType $item
     * @return \PocztaPolska\StructType\CreateParcelContent
     */
    public function addToParcelContent(\PocztaPolska\StructType\ParcelContentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ParcelContentType) {
            throw new InvalidArgumentException(sprintf('The parcelContent property can only contain items of type \PocztaPolska\StructType\ParcelContentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelContent[] = $item;
        
        return $this;
    }
}
