<?php

namespace PocztaPolska;

class przesylkaBiznesowaPlusType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var \PocztaPolska\pobranieType */
    public $pobranie;
    /** @var \PocztaPolska\placowkaPocztowaType */
    public $urzadWydaniaPrzesylki;
    /** @var \PocztaPolska\subPrzesylkaBiznesowaPlusType */
    public $subPrzesylka;
    /** @var \PocztaPolska\date */
    public $dataDrugiejProbyDoreczenia;
    /** @var int */
    public $drugaProbaDoreczeniaPoLiczbieDni;
    /** @var boolean */
    public $posteRestante;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\gabarytBiznesowaType */
    public $gabaryt;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var \PocztaPolska\kwotaTranzakcjiType */
    public $kwotaTranzakcji;
    /** @var boolean */
    public $ostroznie;
    /** @var \PocztaPolska\kategoriaType */
    public $kategoria;
    /** @var \PocztaPolska\iloscPotwierdzenOdbioruType */
    public $iloscPotwierdzenOdbioru;
    /** @var boolean */
    public $zwrotDoslanie;
    /** @var \PocztaPolska\eKontaktType */
    public $eKontaktAdresata;
    /** @var \PocztaPolska\eSposobPowiadomieniaType */
    public $eSposobPowiadomieniaAdresata;
    /** @var \PocztaPolska\numerPrzesylkiKlientaType */
    public $numerPrzesylkiKlienta;
    /** @var int */
    public $iloscDniOczekiwaniaNaWydanie;
    /** @var dateTime */
    public $oczekiwanyTerminDoreczenia;
    /** @var \PocztaPolska\terminRodzajPlusType */
    public $terminRodzajPlus;
    /** @var \PocztaPolska\numerTransakcjiOdbioruType */
    public $numerTransakcjiOdbioru;
}
