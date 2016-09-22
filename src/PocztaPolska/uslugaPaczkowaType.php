<?php

namespace PocztaPolska;
class uslugaPaczkowaType extends \PocztaPolska\przesylkaRejestrowanaType {
	/** @var \PocztaPolska\pobranieType */	public $pobranie;
	/** @var \PocztaPolska\potwierdzenieDoreczeniaType */	public $potwierdzenieDoreczenia;
	/** @var \PocztaPolska\urzadWydaniaEPrzesylkiType */	public $urzadWydaniaEPrzesylki;
	/** @var \PocztaPolska\subUslugaPaczkowaType */	public $subPrzesylka;
	/** @var \PocztaPolska\potwierdzenieOdbioruPaczkowaType */	public $potwierdzenieOdbioru;
	/** @var \PocztaPolska\ubezpieczenieType */	public $ubezpieczenie;
	/** @var \PocztaPolska\zwrotDokumentowPaczkowaType */	public $zwrotDokumentow;
	/** @var \PocztaPolska\doreczenieUslugaPocztowaType */	public $doreczenie;
	/** @var \PocztaPolska\EPOType */	public $epo;
	/** @var \PocztaPolska\zasadySpecjalneEnum */	public $zasadySpecjalne;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var \PocztaPolska\wartoscType */	public $wartosc;
	/** @var boolean */	public $ponadgabaryt;
	/** @var string */	public $zawartosc;
	/** @var boolean */	public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
	/** @var boolean */	public $ostroznie;
	/** @var \PocztaPolska\uiszczaOplateType */	public $uiszczaOplate;
	/** @var \PocztaPolska\terminPaczkowaType */	public $termin;
	/** @var \PocztaPolska\opakowaniePocztowaType */	public $opakowanie;
	/** @var string */	public $numerPrzesylkiKlienta;
	/** @var \PocztaPolska\numerTransakcjiOdbioruType */	public $numerTransakcjiOdbioru;
	/** @var \PocztaPolska\gabarytType */	public $gabaryt;
}


