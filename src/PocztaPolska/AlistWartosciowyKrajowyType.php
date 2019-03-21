<?php

namespace PocztaPolska;

class AlistWartosciowyKrajowyType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var boolean */
    public $posteRestante;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var \PocztaPolska\iloscPotwierdzenOdbioruType */
    public $iloscPotwierdzenOdbioru;
    /** @var \PocztaPolska\kategoriaType */
    public $kategoria;
    /** @var \PocztaPolska\formatType */
    public $format;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var string */
    public $numerWewnetrznyPrzesylki;
    /** @var boolean */
    public $egzemplarzBiblioteczny;
    /** @var boolean */
    public $dlaOciemnialych;
}
