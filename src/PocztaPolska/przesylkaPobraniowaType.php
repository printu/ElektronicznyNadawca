<?php

namespace PocztaPolska;
class przesylkaPobraniowaType extends \PocztaPolska\przesylkaRejestrowanaType {
	/** @var \PocztaPolska\pobranieType */	public $pobranie;
	/** @var boolean */	public $posteRestante;
	/** @var \PocztaPolska\iloscPotwierdzenOdbioruType */	public $iloscPotwierdzenOdbioru;
	/** @var \PocztaPolska\kategoriaType */	public $kategoria;
	/** @var \PocztaPolska\gabarytType */	public $gabaryt;
	/** @var boolean */	public $ostroznie;
	/** @var \PocztaPolska\wartoscType */	public $wartosc;
	/** @var \PocztaPolska\masaType */	public $masa;
}


