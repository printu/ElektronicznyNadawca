<?php

namespace PocztaPolska;

class AlistZwyklyFirmowyType extends \PocztaPolska\przesylkaNieRejestrowanaType
{
    /** @var \PocztaPolska\adresType */
    public $adres;
    /** @var boolean */
    public $posteRestante;
    /** @var boolean */
    public $miejscowa;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var boolean */
    public $egzemplarzBiblioteczny;
    /** @var boolean */
    public $dlaOciemnialych;
    /** @var boolean */
    public $obszarMiasto;
    /** @var \PocztaPolska\kategoriaType */
    public $kategoria;
    /** @var \PocztaPolska\gabarytType */
    public $gabaryt;
}
