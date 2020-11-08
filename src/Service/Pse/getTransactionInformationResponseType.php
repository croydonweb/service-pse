<?php

namespace Croydon\Service\Pse;

class getTransactionInformationResponseType
{

    /**
     * @var string $EntityCode
     */
    protected $EntityCode = null;

    /**
     * @var string $TicketId
     */
    protected $TicketId = null;

    /**
     * @var string $TrazabilityCode
     */
    protected $TrazabilityCode = null;

    /**
     * @var string $TranState
     */
    protected $TranState = null;

    /**
     * @var string $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var float $TransValue
     */
    protected $TransValue = null;

    /**
     * @var float $TransVatValue
     */
    protected $TransVatValue = null;

    /**
     * @var string $PayCurrency
     */
    protected $PayCurrency = null;

    /**
     * @var float $CurrencyRate
     */
    protected $CurrencyRate = null;

    /**
     * @var date $BankProcessDate
     */
    protected $BankProcessDate = null;

    /**
     * @var string $BankName
     */
    protected $BankName = null;

    /**
     * @var string $PaymentSystem
     */
    protected $PaymentSystem = null;

    /**
     * @var string[] $ReferenceArray
     */
    protected $ReferenceArray = null;

    /**
     * @var retriesTicketIdType[] $RetriesTicketId
     */
    protected $RetriesTicketId = null;

    /**
     * @param float $TransValue
     * @param float $TransVatValue
     * @param float $CurrencyRate
     * @param date $BankProcessDate
     */
    public function __construct($TransValue, $TransVatValue, $CurrencyRate, $BankProcessDate)
    {
      $this->TransValue = $TransValue;
      $this->TransVatValue = $TransVatValue;
      $this->CurrencyRate = $CurrencyRate;
      $this->BankProcessDate = $BankProcessDate;
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
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setEntityCode($EntityCode)
    {
      $this->EntityCode = $EntityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketId()
    {
      return $this->TicketId;
    }

    /**
     * @param string $TicketId
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setTicketId($TicketId)
    {
      $this->TicketId = $TicketId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrazabilityCode()
    {
      return $this->TrazabilityCode;
    }

    /**
     * @param string $TrazabilityCode
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setTrazabilityCode($TrazabilityCode)
    {
      $this->TrazabilityCode = $TrazabilityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTranState()
    {
      return $this->TranState;
    }

    /**
     * @param string $TranState
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setTranState($TranState)
    {
      $this->TranState = $TranState;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCode()
    {
      return $this->ReturnCode;
    }

    /**
     * @param string $ReturnCode
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
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
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
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
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setTransVatValue($TransVatValue)
    {
      $this->TransVatValue = $TransVatValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayCurrency()
    {
      return $this->PayCurrency;
    }

    /**
     * @param string $PayCurrency
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setPayCurrency($PayCurrency)
    {
      $this->PayCurrency = $PayCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrencyRate()
    {
      return $this->CurrencyRate;
    }

    /**
     * @param float $CurrencyRate
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setCurrencyRate($CurrencyRate)
    {
      $this->CurrencyRate = $CurrencyRate;
      return $this;
    }

    /**
     * @return date
     */
    public function getBankProcessDate()
    {
      return $this->BankProcessDate;
    }

    /**
     * @param date $BankProcessDate
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setBankProcessDate($BankProcessDate)
    {
      $this->BankProcessDate = $BankProcessDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setBankName($BankName)
    {
      $this->BankName = $BankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentSystem()
    {
      return $this->PaymentSystem;
    }

    /**
     * @param string $PaymentSystem
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setPaymentSystem($PaymentSystem)
    {
      $this->PaymentSystem = $PaymentSystem;
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
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setReferenceArray(array $ReferenceArray = null)
    {
      $this->ReferenceArray = $ReferenceArray;
      return $this;
    }

    /**
     * @return retriesTicketIdType[]
     */
    public function getRetriesTicketId()
    {
      return $this->RetriesTicketId;
    }

    /**
     * @param retriesTicketIdType[] $RetriesTicketId
     * @return \Croydon\Service\Pse\getTransactionInformationResponseType
     */
    public function setRetriesTicketId(array $RetriesTicketId = null)
    {
      $this->RetriesTicketId = $RetriesTicketId;
      return $this;
    }

}
