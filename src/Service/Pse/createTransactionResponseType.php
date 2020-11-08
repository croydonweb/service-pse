<?php

namespace Croydon\Service\Pse;

class createTransactionResponseType
{

    /**
     * @var string $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var string $TicketId
     */
    protected $TicketId = null;

    /**
     * @var string $eCollectUrl
     */
    protected $eCollectUrl = null;

    
    public function __construct()
    {
    
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
     * @return \Croydon\Service\Pse\createTransactionResponseType
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
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
     * @return \Croydon\Service\Pse\createTransactionResponseType
     */
    public function setTicketId($TicketId)
    {
      $this->TicketId = $TicketId;
      return $this;
    }

    /**
     * @return string
     */
    public function getECollectUrl()
    {
      return $this->eCollectUrl;
    }

    /**
     * @param string $eCollectUrl
     * @return \Croydon\Service\Pse\createTransactionResponseType
     */
    public function setECollectUrl($eCollectUrl)
    {
      $this->eCollectUrl = $eCollectUrl;
      return $this;
    }

}
