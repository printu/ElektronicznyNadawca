<?php

namespace PocztaPolska;

class AdoreczeniePrzesylkiType
{
    /** @var dateTime */
    public $data;
    /** @var string */
    public $osobaOdbierajaca;
    /** @var \PocztaPolska\podmiotDoreczeniaEnum */
    public $podmiotDoreczenia;
    /** @var \PocztaPolska\date */
    public $dataPelnomocnictwa;
    /** @var string */
    public $numerPelnomocnictwa;
    /** @var boolean */
    public $pieczecFirmowa;
    /** @var \PocztaPolska\miejscePozostawieniaZawiadomieniaODoreczeniuEnum */
    public $miejscePozostawieniaZawiadomieniaODoreczeniu;
}
