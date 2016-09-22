<?php

namespace PocztaPolska;
class przesylkaEPOType {
	/** @var \PocztaPolska\EPOInfoType */	public $EPOInfo;
	/** @var base64Binary */	public $biometricSignatureContent;
	/** @var \PocztaPolska\guidType */	public $guid;
	/** @var \PocztaPolska\numerNadaniaType */	public $numerNadania;
	/** @var \PocztaPolska\statusEPOEnum */	public $statusEPO;
}


