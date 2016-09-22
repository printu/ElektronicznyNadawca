<?php

namespace PocztaPolska;

class pocztexKrajowyType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var \PocztaPolska\pobranieType */
    public $pobranie;
    /** @var \PocztaPolska\odbiorPrzesylkiOdNadawcyType */
    public $odbiorPrzesylkiOdNadawcy;
    /** @var \PocztaPolska\doreczenieType */
    public $doreczenie;
    /** @var \PocztaPolska\zwrotDokumentowType */
    public $zwrotDokumentow;
    /** @var \PocztaPolska\potwierdzenieOdbioruType */
    public $potwierdzenieOdbioru;
    /** @var \PocztaPolska\potwierdzenieDoreczeniaType */
    public $potwierdzenieDoreczenia;
    /** @var \PocztaPolska\ubezpieczenieType */
    public $ubezpieczenie;
    /** @var boolean */
    public $posteRestante;
    /** @var \PocztaPolska\terminRodzajType */
    public $terminRodzaj;
    /** @var boolean */
    public $kopertaFirmowa;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var boolean */
    public $ostroznie;
    /** @var boolean */
    public $ponadgabaryt;
    /** @var \PocztaPolska\uiszczaOplateType */
    public $uiszczaOplate;
    /** @var int */
    public $odleglosc;
    /** @var string */
    public $zawartosc;
    /** @var boolean */
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
}


