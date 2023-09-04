<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for oplacaOdbiorcaKartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OplacaOdbiorcaKartaType extends AbstractStructBase
{
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator karty odbiorcy opłacającego przesyłkę.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idKarta;
    /**
     * The idAdresKorespondencyjny
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator jednego z adresów korespondencyjnych zdefiniowanych dla karty. Wymagalny dla typ=ADRESAT_UMOWNY.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idAdresKorespondencyjny = null;
    /**
     * Constructor method for oplacaOdbiorcaKartaType
     * @uses OplacaOdbiorcaKartaType::setIdKarta()
     * @uses OplacaOdbiorcaKartaType::setIdAdresKorespondencyjny()
     * @param int $idKarta
     * @param int $idAdresKorespondencyjny
     */
    public function __construct(int $idKarta, ?int $idAdresKorespondencyjny = null)
    {
        $this
            ->setIdKarta($idKarta)
            ->setIdAdresKorespondencyjny($idAdresKorespondencyjny);
    }
    /**
     * Get idKarta value
     * @return int
     */
    public function getIdKarta(): int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \PocztaPolska\StructType\OplacaOdbiorcaKartaType
     */
    public function setIdKarta(int $idKarta): self
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get idAdresKorespondencyjny value
     * @return int|null
     */
    public function getIdAdresKorespondencyjny(): ?int
    {
        return $this->idAdresKorespondencyjny;
    }
    /**
     * Set idAdresKorespondencyjny value
     * @param int $idAdresKorespondencyjny
     * @return \PocztaPolska\StructType\OplacaOdbiorcaKartaType
     */
    public function setIdAdresKorespondencyjny(?int $idAdresKorespondencyjny = null): self
    {
        // validation for constraint: int
        if (!is_null($idAdresKorespondencyjny) && !(is_int($idAdresKorespondencyjny) || ctype_digit($idAdresKorespondencyjny))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idAdresKorespondencyjny, true), gettype($idAdresKorespondencyjny)), __LINE__);
        }
        $this->idAdresKorespondencyjny = $idAdresKorespondencyjny;
        
        return $this;
    }
}
