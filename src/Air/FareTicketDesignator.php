<?php

namespace Santosdave\Travelport\Air;

class FareTicketDesignator
{

    /**
     * @var typeTicketDesignator $Value
     */
    protected $Value = null;

    /**
     * @param typeTicketDesignator $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeTicketDesignator $Value
     * @return \Santosdave\Travelport\Air\FareTicketDesignator
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
