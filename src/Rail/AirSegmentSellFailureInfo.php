<?php

namespace Santosdave\Travelport\Rail;

class AirSegmentSellFailureInfo
{

    /**
     * @var AirSegmentError $AirSegmentError
     */
    protected $AirSegmentError = null;

    /**
     * @param AirSegmentError $AirSegmentError
     */
    public function __construct($AirSegmentError = null)
    {
      $this->AirSegmentError = $AirSegmentError;
    }

    /**
     * @return AirSegmentError
     */
    public function getAirSegmentError()
    {
      return $this->AirSegmentError;
    }

    /**
     * @param AirSegmentError $AirSegmentError
     * @return \Santosdave\Travelport\Rail\AirSegmentSellFailureInfo
     */
    public function setAirSegmentError($AirSegmentError)
    {
      $this->AirSegmentError = $AirSegmentError;
      return $this;
    }

}
