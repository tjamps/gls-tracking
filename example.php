<?php

use Tjamps\GlsTracking\RestTrackingApi;
use Tjamps\GlsTracking\SoapTrackingApi;

include_once __DIR__.'/vendor/autoload.php';

$soapApi = new SoapTrackingApi($_SERVER['SOAP_API_USERNAME'], $_SERVER['SOAP_API_PASSWORD']);
$response = $soapApi->getParcelsList('FR', 'BPI2252386');
dump($response);

$restApi = new RestTrackingApi($_SERVER['REST_API_USERNAME'], $_SERVER['REST_API_PASSWORD']);
$response = $restApi->getParcelDetails('92562415927,92562415928', 'fr');
dump($response);

