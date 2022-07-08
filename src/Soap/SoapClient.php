<?php

namespace Tjamps\GlsTracking\Soap;

use SoapClient as PhpSoapClient;
use Tjamps\GlsTracking\Soap\Request\AbstractRequest;

class SoapClient
{
    public function request(AbstractRequest $request)
    {
        $phpSoapClient = $this->initPhpSoapClient();

        return $phpSoapClient->{$request->getSoapFunctionName()}($request->toArray());
    }

    private function initPhpSoapClient(): PhpSoapClient
    {
        return new PhpSoapClient(
            'http://www.gls-group.eu/276-I-PORTAL-WEBSERVICE/services/Tracking/wsdl/Tracking.wsdl',
            [
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                'exceptions' => true,
            ]
        );
    }
}
