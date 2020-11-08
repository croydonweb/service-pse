<?php

namespace Croydon\Service\Pse;

class retriesTicketIdType
{

    /**
     * @var string $TicketId
     */
    protected $TicketId = null;

    /**
     * @var string $TranState
     */
    protected $TranState = null;

    
    public function __construct()
    {
    
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
     * @return \Croydon\Service\Pse\retriesTicketIdType
     */
    public function setTicketId($TicketId)
    {
      $this->TicketId = $TicketId;
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
     * @return \Croydon\Service\Pse\retriesTicketIdType
     */
    public function setTranState($TranState)
    {
      $this->TranState = $TranState;
      return $this;
    }

}
