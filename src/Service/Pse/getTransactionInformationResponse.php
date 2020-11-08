<?php

namespace Croydon\Service\Pse;

class getTransactionInformationResponse
{

    /**
     * @var getTransactionInformationResponseType $getTransactionInformationResult
     */
    protected $getTransactionInformationResult = null;

    /**
     * @param getTransactionInformationResponseType $getTransactionInformationResult
     */
    public function __construct($getTransactionInformationResult)
    {
      $this->getTransactionInformationResult = $getTransactionInformationResult;
    }

    /**
     * @return getTransactionInformationResponseType
     */
    public function getGetTransactionInformationResult()
    {
      return $this->getTransactionInformationResult;
    }

    /**
     * @param getTransactionInformationResponseType $getTransactionInformationResult
     * @return \Croydon\Service\Pse\getTransactionInformationResponse
     */
    public function setGetTransactionInformationResult($getTransactionInformationResult)
    {
      $this->getTransactionInformationResult = $getTransactionInformationResult;
      return $this;
    }

}
