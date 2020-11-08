<?php

namespace Croydon\Service\Pse;

use SoapClient;
use SoapFault;

class ECollectWebservicesv2 extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'getTransactionInformation' => 'Croydon\\Service\\Pse\\getTransactionInformation',
        'getTransactionInformationType' => 'Croydon\\Service\\Pse\\getTransactionInformationType',
        'getTransactionInformationResponse' => 'Croydon\\Service\\Pse\\getTransactionInformationResponse',
        'getTransactionInformationResponseType' => 'Croydon\\Service\\Pse\\getTransactionInformationResponseType',
        'retriesTicketIdType' => 'Croydon\\Service\\Pse\\retriesTicketIdType',
        'createTransactionPayment' => 'Croydon\\Service\\Pse\\createTransactionPayment',
        'createTransactionType' => 'Croydon\\Service\\Pse\\createTransactionType',
        'createTransactionPaymentResponse' => 'Croydon\\Service\\Pse\\createTransactionPaymentResponse',
        'createTransactionResponseType' => 'Croydon\\Service\\Pse\\createTransactionResponseType',
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     * @throws SoapFault
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'https://test1.e-collect.com/d_Express/webservice/eCollectWebservicesv2.asmx?WSDL';
        }
        try {
            parent::__construct($wsdl, $options);
        } catch (SoapFault $e) {
            throw new SoapFault($e->getCode(), $e->getMessage());
        }
    }

    /**
     * @param getTransactionInformation $parameters
     * @return getTransactionInformationResponse
     */
    public function getTransactionInformation(getTransactionInformation $parameters)
    {
        return $this->__soapCall('getTransactionInformation', array($parameters));
    }

    /**
     * @param createTransactionPayment $parameters
     * @return createTransactionPaymentResponse
     */
    public function createTransactionPayment(createTransactionPayment $parameters)
    {
        return $this->__soapCall('createTransactionPayment', array($parameters));
    }

}
