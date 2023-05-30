<?php

namespace Santosdave\Travelport\Air;

class FlightTimeTableList
{

    /**
     * @var FlightTimeDetail $FlightTimeDetail
     */
    protected $FlightTimeDetail = null;

    /**
     * @param FlightTimeDetail $FlightTimeDetail
     */
    public function __construct($FlightTimeDetail = null)
    {
      $this->FlightTimeDetail = $FlightTimeDetail;
    }

    /**
     * @return FlightTimeDetail
     */
    public function getFlightTimeDetail()
    {
      return $this->FlightTimeDetail;
    }

    /**
     * @param FlightTimeDetail $FlightTimeDetail
     * @return \Santosdave\Travelport\Air\FlightTimeTableList
     */
    public function setFlightTimeDetail($FlightTimeDetail)
    {
      $this->FlightTimeDetail = $FlightTimeDetail;
      return $this;
    }

}
