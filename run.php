<?php

use Symfony\Component\HttpClient\HttpClient;
use Tjamps\GlsTracking\SoapTrackingApi;

include_once __DIR__.'/vendor/autoload.php';


$soapApi = new SoapTrackingApi('2503259601', 'GLS');
//$response = $soapApi->getParcelsList('FR', 'BPI2252386');
$response = $soapApi->getParcelsList('FR', '', '', new DateTimeImmutable('2022-06-11 07:36:00'), new DateTimeImmutable('2022-06-13 07:36:00'));

var_dump($response);die;

$wsdl = 'http://www.gls-group.eu/276-I-PORTAL-WEBSERVICE/services/Tracking/wsdl/Tracking.wsdl';
$client = new SoapClient($wsdl, [
    'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
    'exceptions' => true,
]);


$data = [
    'Credentials' => ['UserName' => '2503259601', 'Password' => 'GLS',],
    'Parameters' => ['ParamCode' => 'LangCode', 'ParamValue' => 'EN',],
    //'CustomRef' => 'BPI2252263',
    'CustomRef' => 'BPI225226',
    'DateFrom' => ['Year' => 2022, 'Month' => 6, 'Day' => 11, 'Hour' => 7, 'Minut' => 36],
    'DateTo' => ['Year' => 2022, 'Month' => 7, 'Day' => 11, 'Hour' => 7, 'Minut' => 36],
];

$result = $client->GetTuList($data);
var_dump($result);


$client = HttpClient::create();
$url = 'https://api.gls-group.eu/public/v1/tracking/references/00G3YVWA';
$response = $client->request('GET', $url, [
    'auth_basic' => ['25032596ws', '32596'],
    'headers' => [
        'Content-Type: application/json',
        'Accept: application/json',
        'Accept-Language: fr',
    ],
]);
var_dump($response->toArray());
