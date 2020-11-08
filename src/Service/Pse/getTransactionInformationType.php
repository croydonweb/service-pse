<?php

namespace Croydon\Service\Pse;

class getTransactionInformationType
{

    /**
     * @var string $EntityCode
     */
    protected $EntityCode = null;

    /**
     * @var string $TicketId
     */
    protected $TicketId = null;

    
    public function __construct()
    {
    
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
     * @return \Croydon\Service\Pse\getTransactionInformationType
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
     * @return \Croydon\Service\Pse\getTransactionInformationType
     */
    public function setTicketId($TicketId)
    {
      $this->TicketId = $TicketId;
      return $this;
    }

}
