<?php

namespace PocztaPolska;
class przesylkaPoleconaKrajowaType extends \PocztaPolska\przesylkaRejestrowanaType {
	/** @var \PocztaPolska\EPOType */	public $epo;
	/** @var \PocztaPolska\zasadySpecjalneEnum */	public $zasadySpecjalne;
	/** @var boolean */	public $posteRestante;
	/** @var \PocztaPolska\iloscPotwierdzenOdbioruType */	public $iloscPotwierdzenOdbioru;
	/** @var \PocztaPolska\kategoriaType */	public $kategoria;
	/** @var \PocztaPolska\gabarytType */	public $gabaryt;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var boolean */	public $egzemplarzBiblioteczny;
	/** @var boolean */	public $dlaOciemnialych;
	/** @var boolean */	public $obszarMiasto;
	/** @var boolean */	public $miejscowa;
}


