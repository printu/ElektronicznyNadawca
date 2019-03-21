<?php

namespace PocztaPolska;

class zwrotPrzesylkiType
{
    /** @var \PocztaPolska\przyczynaZwrotuEnum */
    public $przyczyna;
    /** @var dateTime */
    public $data;
    /** @var \PocztaPolska\przyczynaZwrotuDodatkowaType */
    public $przyczynaZwrotuDodatkowa;
}
