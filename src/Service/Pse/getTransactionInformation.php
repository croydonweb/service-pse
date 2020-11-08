<?php

namespace Croydon\Service\Pse;

class getTransactionInformation
{

    /**
     * @var getTransactionInformationType $request
     */
    protected $request = null;

    /**
     * @param getTransactionInformationType $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return getTransactionInformationType
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param getTransactionInformationType $request
     * @return \Croydon\Service\Pse\getTransactionInformation
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
