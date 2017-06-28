<?php

namespace PocztaPolska;

class paczkaPocztowaPLUSType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var boolean */
    public $posteRestante;
    /** @var \PocztaPolska\iloscPotwierdzenOdbioruType */
    public $iloscPotwierdzenOdbioru;
    /** @var \PocztaPolska\kategoriaType */
    public $kategoria;
    /** @var \PocztaPolska\gabarytType */
    public $gabaryt;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var boolean */
    public $zwrotDoslanie;
}
