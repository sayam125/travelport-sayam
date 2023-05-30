<?php

namespace Santosdave\Travelport\GDSQueue;

class TourCode
{

    /**
     * @var typeTourCode $Value
     */
    protected $Value = null;

    /**
     * @param typeTourCode $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typeTourCode
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeTourCode $Value
     * @return \Santosdave\Travelport\GDSQueue\TourCode
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
