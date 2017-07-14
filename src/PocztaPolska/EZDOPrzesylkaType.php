<?php

namespace PocztaPolska;

class EZDOPrzesylkaType
{
    /** @var \PocztaPolska\numerNadaniaType */
    public $numerNadania;
    /** @var string */
    public $rodzaj;
    /** @var \PocztaPolska\kategoriaType */
    public $kategoria;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var \PocztaPolska\kwotaPobraniaType */
    public $kwotaPobrania;
    /** @var string */
    public $numerWewnetrznyPrzesylki;
    /** @var string */
    public $zwrot;
}
