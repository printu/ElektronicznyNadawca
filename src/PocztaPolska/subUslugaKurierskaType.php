<?php

namespace PocztaPolska;

class subUslugaKurierskaType extends \PocztaPolska\przesylkaType
{
    /** @var \PocztaPolska\pobranieType */
    public $pobranie;
    /** @var \PocztaPolska\ubezpieczenieType */
    public $ubezpieczenie;
    /** @var \PocztaPolska\numerNadaniaType */
    public $numerNadania;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var boolean */
    public $ostroznie;
    /** @var \PocztaPolska\opakowanieKurierskaType */
    public $opakowanie;
    /** @var boolean */
    public $ponadgabaryt;
    /** @var string */
    public $numerPrzesylkiKlienta;
}


