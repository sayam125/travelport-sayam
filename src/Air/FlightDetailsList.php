<?php

namespace Santosdave\Travelport\Air;

class FlightDetailsList
{

    /**
     * @var FlightDetails $FlightDetails
     */
    protected $FlightDetails = null;

    /**
     * @param FlightDetails $FlightDetails
     */
    public function __construct($FlightDetails = null)
    {
      $this->FlightDetails = $FlightDetails;
    }

    /**
     * @return FlightDetails
     */
    public function getFlightDetails()
    {
      return $this->FlightDetails;
    }

    /**
     * @param FlightDetails $FlightDetails
     * @return \Santosdave\Travelport\Air\FlightDetailsList
     */
    public function setFlightDetails($FlightDetails)
    {
      $this->FlightDetails = $FlightDetails;
      return $this;
    }

}
