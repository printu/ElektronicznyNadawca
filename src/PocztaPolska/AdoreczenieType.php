<?php

namespace PocztaPolska;

class AdoreczenieType
{
    /** @var \PocztaPolska\date */
    public $oczekiwanyTerminDoreczenia;
    /** @var \PocztaPolska\oczekiwanaGodzinaDoreczeniaType */
    public $oczekiwanaGodzinaDoreczenia;
    /** @var boolean */
    public $wSobote;
    /** @var boolean */
    public $w90Minut;
    /** @var boolean */
    public $wNiedzieleLubSwieto;
    /** @var boolean */
    public $doRakWlasnych;
    /** @var boolean */
    public $wGodzinachOd20Do7;
}
