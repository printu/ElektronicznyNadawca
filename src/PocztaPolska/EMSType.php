<?php

namespace PocztaPolska;

class EMSType extends \PocztaPolska\przesylkaRejestrowanaType
{
    /** @var \PocztaPolska\ubezpieczenieType */
    public $ubezpieczenie;
    /** @var \PocztaPolska\deklaracjaCelnaType */
    public $deklaracjaCelna;
    /** @var \PocztaPolska\EMSTypOpakowaniaType */
    public $typOpakowania;
    /** @var \PocztaPolska\masaType */
    public $masa;
    /** @var boolean */
    public $zalaczoneDokumenty;
}
