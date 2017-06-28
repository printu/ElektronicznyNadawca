<?php

namespace PocztaPolska;

class subPrzesylkaPaletowaType extends \PocztaPolska\przesylkaType
{
    /** @var \PocztaPolska\paletaType */
    public $paleta;
    /** @var string */
    public $zawartosc;
    /** @var \PocztaPolska\masaType */
    public $masa;
}
