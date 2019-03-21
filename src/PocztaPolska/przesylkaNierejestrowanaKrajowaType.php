<?php

namespace PocztaPolska;

class przesylkaNierejestrowanaKrajowaType extends \PocztaPolska\przesylkaNieRejestrowanaType
{
    /** @var \PocztaPolska\kategoriaType */
    public $kategoria;
    /** @var \PocztaPolska\formatType */
    public $format;
    /** @var \PocztaPolska\masaType */
    public $masa;
}
