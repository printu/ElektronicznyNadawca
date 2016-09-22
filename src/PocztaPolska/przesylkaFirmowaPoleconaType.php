<?php

namespace PocztaPolska;
class przesylkaFirmowaPoleconaType extends \PocztaPolska\przesylkaRejestrowanaType {
	/** @var \PocztaPolska\EPOType */	public $epo;
	/** @var \PocztaPolska\zasadySpecjalneEnum */	public $zasadySpecjalne;
	/** @var boolean */	public $posteRestante;
	/** @var \PocztaPolska\iloscPotwierdzenOdbioruType */	public $iloscPotwierdzenOdbioru;
	/** @var \PocztaPolska\masaType */	public $masa;
	/** @var boolean */	public $miejscowa;
	/** @var boolean */	public $obszarMiasto;
	/** @var \PocztaPolska\kategoriaType */	public $kategoria;
	/** @var \PocztaPolska\gabarytType */	public $gabaryt;
}


