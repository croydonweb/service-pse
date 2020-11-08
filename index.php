<?php

use Croydon\Service\Pse\ECollectWebservicesv2;
use Croydon\Service\Pse\getTransactionInformation;
use Croydon\Service\Pse\getTransactionInformationType;

require 'vendor/autoload.php';

$getTransactionRequest = new getTransactionInformationType();
$getTransactionRequest->setEntityCode(10324);
$getTransactionRequest->setTicketId(7051573);
$getTransanctionInformation = new getTransactionInformation($getTransactionRequest);

$ecollectWebServices = new ECollectWebservicesv2();
var_dump($ecollectWebServices->getTransactionInformation($getTransanctionInformation)->getGetTransactionInformationResult());
