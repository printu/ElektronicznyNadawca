<?php

namespace PocztaPolska;

class przesylkaNaWarunkachSzczegolnychType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var boolean */
    public $posteRestante;
    /** @var \PocztaPolska\iloscPotwierdzenOdbioruType */
    public $iloscPotwierdzenOdbioru;
    /** @var \PocztaPolska\kategoriaType */
    public $kategoria;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var \PocztaPolska\masaType */
    public $masa;
}
