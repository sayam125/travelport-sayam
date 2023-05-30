<?php

namespace Santosdave\Travelport\Util;

class typeSpecificFlightNumber
{

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @param typeFlightNumber $FlightNumber
     */
    public function __construct($FlightNumber = null)
    {
      $this->FlightNumber = $FlightNumber;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param typeFlightNumber $FlightNumber
     * @return \Santosdave\Travelport\Util\typeSpecificFlightNumber
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

}
