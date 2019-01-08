<?php

namespace PocztaPolska;

class oczekujeNaZgodeEZwrotType
{
    /** @var \PocztaPolska\shopEZwrotyType */
    public $sklepEZwrot;
    /** @var int */
    public $idZgody;
    /** @var \PocztaPolska\nazwaProduktuEZwrotType */
    public $nazwaProduktu;
    /** @var \PocztaPolska\numerZamowieniaEZwrotType */
    public $numerZamowienia;
    /** @var \PocztaPolska\numerNadaniaType */
    public $numerNadania;
    /** @var \PocztaPolska\emailType */
    public $email;
    /** @var \PocztaPolska\date */
    public $dataNadania;
    /** @var \PocztaPolska\guidType */
    public $guidZgodaEZwrot;
}
