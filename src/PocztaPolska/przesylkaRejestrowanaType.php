<?php

namespace PocztaPolska;

class przesylkaRejestrowanaType extends \PocztaPolska\przesylkaType
{
    /** @var \PocztaPolska\adresType */
    public $adres;
    /** @var \PocztaPolska\adresType */
    public $nadawca;
    /** @var \PocztaPolska\numerNadaniaType */
    public $numerNadania;
    /** @var \PocztaPolska\sygnaturaType */
    public $sygnatura;
    /** @var \PocztaPolska\terminType */
    public $terminSprawy;
    /** @var \PocztaPolska\rodzajType */
    public $rodzaj;
}
