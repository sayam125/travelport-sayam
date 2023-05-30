<?php

namespace Santosdave\Travelport\Terminal;

class SeatAttribute
{

    /**
     * @var anonymous463 $Value
     */
    protected $Value = null;

    /**
     * @param anonymous463 $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return anonymous463
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous463 $Value
     * @return \Santosdave\Travelport\Terminal\SeatAttribute
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
