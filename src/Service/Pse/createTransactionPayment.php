<?php

namespace Croydon\Service\Pse;

class createTransactionPayment
{

    /**
     * @var createTransactionType $request
     */
    protected $request = null;

    /**
     * @param createTransactionType $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return createTransactionType
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param createTransactionType $request
     * @return \Croydon\Service\Pse\createTransactionPayment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
