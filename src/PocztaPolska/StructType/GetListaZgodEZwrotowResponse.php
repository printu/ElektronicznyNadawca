<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListaZgodEZwrotowResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetListaZgodEZwrotowResponse extends AbstractStructBase
{
    /**
     * The lista
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType[]
     */
    protected ?array $lista = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getListaZgodEZwrotowResponse
     * @uses GetListaZgodEZwrotowResponse::setLista()
     * @uses GetListaZgodEZwrotowResponse::setError()
     * @param \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType[] $lista
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $lista = null, ?array $error = null)
    {
        $this
            ->setLista($lista)
            ->setError($error);
    }
    /**
     * Get lista value
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType[]
     */
    public function getLista(): ?array
    {
        return $this->lista;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLista method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLista method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListaForArrayConstraintFromSetLista(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getListaZgodEZwrotowResponseListaItem) {
            // validation for constraint: itemType
            if (!$getListaZgodEZwrotowResponseListaItem instanceof \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType) {
                $invalidValues[] = is_object($getListaZgodEZwrotowResponseListaItem) ? get_class($getListaZgodEZwrotowResponseListaItem) : sprintf('%s(%s)', gettype($getListaZgodEZwrotowResponseListaItem), var_export($getListaZgodEZwrotowResponseListaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The lista property can only contain items of type \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set lista value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType[] $lista
     * @return \PocztaPolska\StructType\GetListaZgodEZwrotowResponse
     */
    public function setLista(?array $lista = null): self
    {
        // validation for constraint: array
        if ('' !== ($listaArrayErrorMessage = self::validateListaForArrayConstraintFromSetLista($lista))) {
            throw new InvalidArgumentException($listaArrayErrorMessage, __LINE__);
        }
        $this->lista = $lista;
        
        return $this;
    }
    /**
     * Add item to lista value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType $item
     * @return \PocztaPolska\StructType\GetListaZgodEZwrotowResponse
     */
    public function addToLista(\PocztaPolska\StructType\OczekujeNaZgodeEZwrotType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType) {
            throw new InvalidArgumentException(sprintf('The lista property can only contain items of type \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->lista[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \PocztaPolska\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getListaZgodEZwrotowResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getListaZgodEZwrotowResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getListaZgodEZwrotowResponseErrorItem) ? get_class($getListaZgodEZwrotowResponseErrorItem) : sprintf('%s(%s)', gettype($getListaZgodEZwrotowResponseErrorItem), var_export($getListaZgodEZwrotowResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \PocztaPolska\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ErrorType[] $error
     * @return \PocztaPolska\StructType\GetListaZgodEZwrotowResponse
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ErrorType $item
     * @return \PocztaPolska\StructType\GetListaZgodEZwrotowResponse
     */
    public function addToError(\PocztaPolska\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \PocztaPolska\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
