<?php

namespace PocztaPolska;
class AglobalExpresType extends \PocztaPolska\przesylkaRejestrowanaType {
	/** @var \PocztaPolska\ubezpieczenieType */	public $ubezpieczenie;
	/** @var \PocztaPolska\potwierdzenieDoreczeniaType */	public $potwierdzenieDoreczenia;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var boolean */	public $posteRestante;
	/** @var string */	public $zawartosc;
	/** @var \PocztaPolska\kategoriaType */	public $kategoria;
	/** @var string */	public $numerPrzesylkiKlienta;
}


