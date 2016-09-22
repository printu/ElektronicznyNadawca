<?php

namespace PocztaPolska;

class paczkaZagranicznaType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var \PocztaPolska\zwrotType */
    public $zwrot;
    /** @var \PocztaPolska\deklaracjaCelnaType */
    public $deklaracjaCelna;
    /** @var boolean */
    public $posteRestante;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var \PocztaPolska\kategoriaType */
    public $kategoria;
    /** @var \PocztaPolska\iloscPotwierdzenOdbioruType */
    public $iloscPotwierdzenOdbioru;
    /** @var boolean */
    public $utrudnionaManipulacja;
    /** @var boolean */
    public $ekspres;
    /** @var string */
    public $numerReferencyjnyCelny;
}


