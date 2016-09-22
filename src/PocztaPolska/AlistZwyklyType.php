<?php

namespace PocztaPolska;
class AlistZwyklyType extends \PocztaPolska\przesylkaNieRejestrowanaType {
	/** @var boolean */	public $posteRestante;
	/** @var \PocztaPolska\kategoriaType */	public $kategoria;
	/** @var \PocztaPolska\gabarytType */	public $gabaryt;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var boolean */	public $egzemplarzBiblioteczny;
	/** @var boolean */	public $dlaOciemnialych;
}


