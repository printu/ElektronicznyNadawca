<?php

namespace PocztaPolska;
class subPrzesylkaBiznesowaType extends \PocztaPolska\przesylkaType {
	/** @var \PocztaPolska\pobranieType */	public $pobranie;
	/** @var \PocztaPolska\ubezpieczenieType */	public $ubezpieczenie;
	/** @var \PocztaPolska\numerNadaniaType */	public $numerNadania;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var \PocztaPolska\gabarytBiznesowaType */	public $gabaryt;
	/** @var \PocztaPolska\wartoscType */	public $wartosc;
	/** @var boolean */	public $ostroznie;
}


