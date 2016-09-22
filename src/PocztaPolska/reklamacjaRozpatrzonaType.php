<?php

namespace PocztaPolska;
class reklamacjaRozpatrzonaType {
	/** @var \PocztaPolska\guidType */	public $guid;
	/** @var \PocztaPolska\numerNadaniaType */	public $numerNadania;
	/** @var \PocztaPolska\rozstrzygniecieType */	public $rozstrzygniecie;
	/** @var int */	public $przyznaneOdszkodowanie;
	/** @var string */	public $uzasadnienie;
	/** @var \PocztaPolska\date */	public $dataRozpatrzenia;
	/** @var string */	public $nazwaJednostkiRozpatrujacej;
	/** @var string */	public $osobaRozpatrujaca;
	/** @var string */	public $idReklamacja;
}


