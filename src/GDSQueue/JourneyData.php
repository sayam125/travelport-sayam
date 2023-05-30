<?php

namespace Santosdave\Travelport\GDSQueue;

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
     * @return \Santosdave\Travelport\GDSQueue\JourneyData
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

}
