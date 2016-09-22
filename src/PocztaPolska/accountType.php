<?php

namespace PocztaPolska;
class accountType {
	/** @var \PocztaPolska\kartaType */	public $karta;
	/** @var \PocztaPolska\permisionType */	public $permision;
	/** @var \PocztaPolska\profilType */	public $profil;
	/** @var \PocztaPolska\jednostkaOrganizacyjnaType */	public $jednostka;
	/** @var \PocztaPolska\jednostkaOrganizacyjnaType */	public $domyslnaJednostka;
	/** @var \PocztaPolska\profilType */	public $domyslnyProfil;
	/** @var string */	public $dostepPoAdresieIP;
	/** @var string */	public $userName;
	/** @var string */	public $firstName;
	/** @var string */	public $lastName;
	/** @var string */	public $email;
	/** @var \PocztaPolska\statusAccountType */	public $status;
}


