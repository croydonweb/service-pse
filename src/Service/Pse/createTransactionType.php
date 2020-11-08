<?php

namespace Croydon\Service\Pse;

class createTransactionType
{

    /**
     * @var string $EntityCode
     */
    protected $EntityCode = null;

    /**
     * @var string $SrvCode
     */
    protected $SrvCode = null;

    /**
     * @var float $TransValue
     */
    protected $TransValue = null;

    /**
     * @var float $TransVatValue
     */
    protected $TransVatValue = null;

    /**
     * @var string $SrvCurrency
     */
    protected $SrvCurrency = null;

    /**
     * @var string $URLResponse
     */
    protected $URLResponse = null;

    /**
     * @var string $URLRedirect
     */
    protected $URLRedirect = null;

    /**
     * @var string $Sign
     */
    protected $Sign = null;

    /**
     * @var string $SignFields
     */
    protected $SignFields = null;

    /**
     * @var string[] $ReferenceArray
     */
    protected $ReferenceArray = null;

    /**
     * @param float $TransValue
     * @param float $TransVatValue
     */
    public function __construct($TransValue, $TransVatValue)
    {
      $this->TransValue = $TransValue;
      $this->TransVatValue = $TransVatValue;
    }

    /**
     * @return string
     */
    public function getEntityCode()
    {
      return $this->EntityCode;
    }

    /**
     * @param string $EntityCode
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setEntityCode($EntityCode)
    {
      $this->EntityCode = $EntityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSrvCode()
    {
      return $this->SrvCode;
    }

    /**
     * @param string $SrvCode
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setSrvCode($SrvCode)
    {
      $this->SrvCode = $SrvCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransValue()
    {
      return $this->TransValue;
    }

    /**
     * @param float $TransValue
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setTransValue($TransValue)
    {
      $this->TransValue = $TransValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransVatValue()
    {
      return $this->TransVatValue;
    }

    /**
     * @param float $TransVatValue
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setTransVatValue($TransVatValue)
    {
      $this->TransVatValue = $TransVatValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getSrvCurrency()
    {
      return $this->SrvCurrency;
    }

    /**
     * @param string $SrvCurrency
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setSrvCurrency($SrvCurrency)
    {
      $this->SrvCurrency = $SrvCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getURLResponse()
    {
      return $this->URLResponse;
    }

    /**
     * @param string $URLResponse
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setURLResponse($URLResponse)
    {
      $this->URLResponse = $URLResponse;
      return $this;
    }

    /**
     * @return string
     */
    public function getURLRedirect()
    {
      return $this->URLRedirect;
    }

    /**
     * @param string $URLRedirect
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setURLRedirect($URLRedirect)
    {
      $this->URLRedirect = $URLRedirect;
      return $this;
    }

    /**
     * @return string
     */
    public function getSign()
    {
      return $this->Sign;
    }

    /**
     * @param string $Sign
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setSign($Sign)
    {
      $this->Sign = $Sign;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignFields()
    {
      return $this->SignFields;
    }

    /**
     * @param string $SignFields
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setSignFields($SignFields)
    {
      $this->SignFields = $SignFields;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getReferenceArray()
    {
      return $this->ReferenceArray;
    }

    /**
     * @param string[] $ReferenceArray
     * @return \Croydon\Service\Pse\createTransactionType
     */
    public function setReferenceArray(array $ReferenceArray = null)
    {
      $this->ReferenceArray = $ReferenceArray;
      return $this;
    }

}
