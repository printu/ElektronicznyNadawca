<?php

namespace PocztaPolska;
class przesylkaZagranicznaType extends \PocztaPolska\przesylkaNieRejestrowanaType {
	/** @var boolean */	public $posteRestante;
	/** @var \PocztaPolska\kategoriaType */	public $kategoria;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var boolean */	public $ekspres;
	/** @var string */	public $kraj;
}


