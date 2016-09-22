<?php

namespace PocztaPolska;

class przesylkaZadeklarowanaWartoscZagranicznaType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var boolean */
    public $posteRestante;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\iloscPotwierdzenOdbioruType */
    public $iloscPotwierdzenOdbioru;
}


