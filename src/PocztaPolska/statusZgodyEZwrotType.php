<?php

namespace PocztaPolska;

class statusZgodyEZwrotType
{
    /** @var \PocztaPolska\eZwrotPrzesylkiType */
    public $eZwrotPrzesylki;
    /** @var \PocztaPolska\guidType */
    public $guidZgodaEZwrot;
    /** @var \PocztaPolska\statusZgodyEZwrotNameType */
    public $status;
    /** @var boolean */
    public $platnoscZaPrzesylke;
    /** @var int */
    public $kosztKontrahenta;
    /** @var \PocztaPolska\date */
    public $dataWygasnieciaZgody;
}
