<?php

namespace PocztaPolska;

class wplataCKPType
{
    /** @var string */
    public $unikalnyIdentyfikatorWplaty;
    /** @var \PocztaPolska\numerNadaniaType */
    public $numerNadania;
    /** @var int */
    public $kwota;
    /** @var \PocztaPolska\date */
    public $dataPobrania;
    /** @var \PocztaPolska\date */
    public $dataPrzelewu;
    /** @var int */
    public $idUmowy;
    /** @var string */
    public $tytulPrzelewuZbiorczego;
}


