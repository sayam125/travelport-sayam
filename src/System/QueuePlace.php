<?php

namespace Santosdave\Travelport\System;

class QueuePlace
{

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var QueueSelector $QueueSelector
     */
    protected $QueueSelector = null;

    /**
     * @param QueueSelector $QueueSelector
     */
    public function __construct($QueueSelector = null)
    {
      $this->QueueSelector = $QueueSelector;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \Santosdave\Travelport\System\QueuePlace
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return QueueSelector
     */
    public function getQueueSelector()
    {
      return $this->QueueSelector;
    }

    /**
     * @param QueueSelector $QueueSelector
     * @return \Santosdave\Travelport\System\QueuePlace
     */
    public function setQueueSelector($QueueSelector)
    {
      $this->QueueSelector = $QueueSelector;
      return $this;
    }

}
