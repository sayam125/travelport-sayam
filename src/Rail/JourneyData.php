<?php

namespace Santosdave\Travelport\Rail;

class JourneyData
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @param typeBaseAirSegment $AirSegment
     */
    public function __construct($AirSegment = null)
    {
      $this->AirSegment = $AirSegment;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \Santosdave\Travelport\Rail\JourneyData
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

}
