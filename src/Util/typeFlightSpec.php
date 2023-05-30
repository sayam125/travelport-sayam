<?php

namespace Santosdave\Travelport\Util;

class typeFlightSpec
{

    /**
     * @var typeFlightNumberRange $FlightNumberRange
     */
    protected $FlightNumberRange = null;

    /**
     * @var typeSpecificFlightNumber $SpecificFlightNumber
     */
    protected $SpecificFlightNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeFlightNumberRange
     */
    public function getFlightNumberRange()
    {
      return $this->FlightNumberRange;
    }

    /**
     * @param typeFlightNumberRange $FlightNumberRange
     * @return \Santosdave\Travelport\Util\typeFlightSpec
     */
    public function setFlightNumberRange($FlightNumberRange)
    {
      $this->FlightNumberRange = $FlightNumberRange;
      return $this;
    }

    /**
     * @return typeSpecificFlightNumber
     */
    public function getSpecificFlightNumber()
    {
      return $this->SpecificFlightNumber;
    }

    /**
     * @param typeSpecificFlightNumber $SpecificFlightNumber
     * @return \Santosdave\Travelport\Util\typeFlightSpec
     */
    public function setSpecificFlightNumber($SpecificFlightNumber)
    {
      $this->SpecificFlightNumber = $SpecificFlightNumber;
      return $this;
    }

}
