<?php

namespace PocztaPolska;
class przesylkaPaletowaType extends \PocztaPolska\przesylkaRejestrowanaType {
	/** @var \PocztaPolska\adresType */	public $miejsceOdbioru;
	/** @var \PocztaPolska\adresType */	public $miejsceDoreczenia;
	/** @var \PocztaPolska\paletaType */	public $paleta;
	/** @var \PocztaPolska\platnikType */	public $platnik;
	/** @var \PocztaPolska\pobranieType */	public $pobranie;
	/** @var \PocztaPolska\subPrzesylkaPaletowaType */	public $subPaleta;
	/** @var string */	public $zawartosc;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var \PocztaPolska\date */	public $dataZaladunku;
	/** @var \PocztaPolska\date */	public $dataDostawy;
	/** @var \PocztaPolska\wartoscType */	public $wartosc;
	/** @var int */	public $iloscZwracanychPaletEUR;
	/** @var string */	public $zalaczonaFV;
	/** @var string */	public $zalaczonyWZ;
	/** @var string */	public $zalaczoneInne;
	/** @var string */	public $zwracanaFV;
	/** @var string */	public $zwracanyWZ;
	/** @var string */	public $zwracaneInne;
	/** @var string */	public $powiadomienieNadawcy;
	/** @var \PocztaPolska\eSposobPowiadomieniaType */	public $powiadomienieOdbiorcy;
}


