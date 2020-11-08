<?php

namespace Croydon\Service\Pse;

class createTransactionPaymentResponse
{

    /**
     * @var createTransactionResponseType $createTransactionPaymentResult
     */
    protected $createTransactionPaymentResult = null;

    /**
     * @param createTransactionResponseType $createTransactionPaymentResult
     */
    public function __construct($createTransactionPaymentResult)
    {
      $this->createTransactionPaymentResult = $createTransactionPaymentResult;
    }

    /**
     * @return createTransactionResponseType
     */
    public function getCreateTransactionPaymentResult()
    {
      return $this->createTransactionPaymentResult;
    }

    /**
     * @param createTransactionResponseType $createTransactionPaymentResult
     * @return \Croydon\Service\Pse\createTransactionPaymentResponse
     */
    public function setCreateTransactionPaymentResult($createTransactionPaymentResult)
    {
      $this->createTransactionPaymentResult = $createTransactionPaymentResult;
      return $this;
    }

}
