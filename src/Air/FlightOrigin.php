<?php

namespace Santosdave\Travelport\Air;

class FlightOrigin
{

    /**
     * @var Airport $Airport
     */
    protected $Airport = null;

    /**
     * @param Airport $Airport
     */
    public function __construct($Airport = null)
    {
      $this->Airport = $Airport;
    }

    /**
     * @return Airport
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport $Airport
     * @return \Santosdave\Travelport\Air\FlightOrigin
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

}
