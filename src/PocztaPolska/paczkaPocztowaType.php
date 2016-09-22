<?php

namespace PocztaPolska;
class paczkaPocztowaType extends \PocztaPolska\przesylkaRejestrowanaType {
	/** @var \PocztaPolska\EPOType */	public $epo;
	/** @var \PocztaPolska\zasadySpecjalneEnum */	public $zasadySpecjalne;
	/** @var boolean */	public $posteRestante;
	/** @var \PocztaPolska\iloscPotwierdzenOdbioruType */	public $iloscPotwierdzenOdbioru;
	/** @var \PocztaPolska\kategoriaType */	public $kategoria;
	/** @var \PocztaPolska\gabarytType */	public $gabaryt;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var \PocztaPolska\wartoscType */	public $wartosc;
	/** @var boolean */	public $zwrotDoslanie;
	/** @var boolean */	public $egzemplarzBiblioteczny;
	/** @var boolean */	public $dlaOciemnialych;
}


