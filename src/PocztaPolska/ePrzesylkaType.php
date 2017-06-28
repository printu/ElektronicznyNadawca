<?php

namespace PocztaPolska;

class ePrzesylkaType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var \PocztaPolska\urzadWydaniaEPrzesylkiType */
    public $urzadWydaniaEPrzesylki;
    /** @var \PocztaPolska\pobranieType */
    public $pobranie;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var \PocztaPolska\eSposobPowiadomieniaType */
    public $eSposobPowiadomieniaAdresata;
    /** @var \PocztaPolska\eSposobPowiadomieniaType */
    public $eSposobPowiadomieniaNadawcy;
    /** @var \PocztaPolska\eKontaktType */
    public $eKontaktAdresata;
    /** @var \PocztaPolska\eKontaktType */
    public $eKontaktNadawcy;
    /** @var boolean */
    public $ostroznie;
    /** @var \PocztaPolska\wartoscType */
    public $wartosc;
}
