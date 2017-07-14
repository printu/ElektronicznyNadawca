<?php

namespace PocztaPolska;

class zamowKuriera
{
    /** @var \PocztaPolska\adresType */
    public $miejsceOdbioru;
    /** @var \PocztaPolska\adresType */
    public $nadawca;
    /** @var string */
    public $oczekiwanaDataOdbioru;
    /** @var string */
    public $oczekiwanaGodzinaOdbioru;
    /** @var string */
    public $szacowanaIloscPrzeslek;
    /** @var string */
    public $szacowanaLacznaMasaPrzesylek;
}
