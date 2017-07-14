<?php

namespace PocztaPolska;

class uslugaKurierskaType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var \PocztaPolska\pobranieType */
    public $pobranie;
    /** @var \PocztaPolska\odbiorPrzesylkiOdNadawcyType */
    public $odbiorPrzesylkiOdNadawcy;
    /** @var \PocztaPolska\potwierdzenieDoreczeniaType */
    public $potwierdzenieDoreczenia;
    /** @var \PocztaPolska\urzadWydaniaEPrzesylkiType */
    public $urzadWydaniaEPrzesylki;
    /** @var \PocztaPolska\subUslugaKurierskaType */
    public $subPrzesylka;
    /** @var \PocztaPolska\potwierdzenieOdbioruKurierskaType */
    public $potwierdzenieOdbioru;
    /** @var \PocztaPolska\ubezpieczenieType */
    public $ubezpieczenie;
    /** @var \PocztaPolska\zwrotDokumentowKurierskaType */
    public $zwrotDokumentow;
    /** @var \PocztaPolska\doreczenieUslugaKurierskaType */
    public $doreczenie;
    /** @var \PocztaPolska\EPOType */
    public $epo;
    /** @var \PocztaPolska\zasadySpecjalneEnum */
    public $zasadySpecjalne;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var boolean */
    public $ponadgabaryt;
    /** @var int */
    public $odleglosc;
    /** @var string */
    public $zawartosc;
    /** @var boolean */
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    /** @var boolean */
    public $ostroznie;
    /** @var \PocztaPolska\uiszczaOplateType */
    public $uiszczaOplate;
    /** @var \PocztaPolska\terminKurierskaType */
    public $termin;
    /** @var \PocztaPolska\opakowanieKurierskaType */
    public $opakowanie;
    /** @var string */
    public $numerPrzesylkiKlienta;
    /** @var \PocztaPolska\numerTransakcjiOdbioruType */
    public $numerTransakcjiOdbioru;
}
