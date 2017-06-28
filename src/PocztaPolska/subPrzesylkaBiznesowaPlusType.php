<?php

namespace PocztaPolska;

class subPrzesylkaBiznesowaPlusType extends \PocztaPolska\przesylkaType
{
    /** @var \PocztaPolska\pobranieType */
    public $pobranie;
    /** @var \PocztaPolska\numerNadaniaType */
    public $numerNadania;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\gabarytBiznesowaType */
    public $gabaryt;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var boolean */
    public $ostroznie;
    /** @var string */
    public $numerPrzesylkiKlienta;
    /** @var int */
    public $kwotaTranzakcji;
    /** @var \PocztaPolska\numerTransakcjiOdbioruType */
    public $numerTransakcjiOdbioru;
}
