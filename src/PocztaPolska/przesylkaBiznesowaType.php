<?php

namespace PocztaPolska;

class przesylkaBiznesowaType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var \PocztaPolska\pobranieType */
    public $pobranie;
    /** @var \PocztaPolska\urzadWydaniaEPrzesylkiType */
    public $urzadWydaniaEPrzesylki;
    /** @var \PocztaPolska\subPrzesylkaBiznesowaType */
    public $subPrzesylka;
    /** @var \PocztaPolska\ubezpieczenieType */
    public $ubezpieczenie;
    /** @var \PocztaPolska\EPOType */
    public $epo;
    /** @var \PocztaPolska\zasadySpecjalneEnum */
    public $zasadySpecjalne;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\gabarytBiznesowaType */
    public $gabaryt;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
    /** @var boolean */
    public $ostroznie;
    /** @var \PocztaPolska\numerTransakcjiOdbioruType */
    public $numerTransakcjiOdbioru;
}
