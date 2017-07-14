<?php

namespace PocztaPolska;

class getEZDOResponse
{
    /** @var \PocztaPolska\adresType */
    public $adres;
    /** @var \PocztaPolska\EZDOPrzesylkaType */
    public $przesylka;
    /** @var \PocztaPolska\errorType */
    public $error;
    /** @var string */
    public $numerKD;
    /** @var string */
    public $numerEZDO;
}
