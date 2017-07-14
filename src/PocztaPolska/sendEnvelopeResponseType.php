<?php

namespace PocztaPolska;

class sendEnvelopeResponseType
{
    /** @var int */
    public $idEnvelope;
    /** @var \PocztaPolska\envelopeStatusType */
    public $envelopeStatus;
    /** @var \PocztaPolska\errorType */
    public $error;
    /** @var string */
    public $envelopeFilename;
}
