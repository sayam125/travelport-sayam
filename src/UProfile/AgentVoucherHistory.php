<?php

namespace Santosdave\Travelport\UProfile;

class AgentVoucherHistory
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @param string $Number
     */
    public function __construct($Number = null)
    {
      $this->Number = $Number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Santosdave\Travelport\UProfile\AgentVoucherHistory
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
