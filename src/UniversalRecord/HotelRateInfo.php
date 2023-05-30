<?php

namespace Santosdave\Travelport\UniversalRecord;

class HotelRateInfo
{

    /**
     * @var typeRatePlanType $RatePlanType
     */
    protected $RatePlanType = null;

    /**
     * @param typeRatePlanType $RatePlanType
     */
    public function __construct($RatePlanType = null)
    {
      $this->RatePlanType = $RatePlanType;
    }

    /**
     * @return typeRatePlanType
     */
    public function getRatePlanType()
    {
      return $this->RatePlanType;
    }

    /**
     * @param typeRatePlanType $RatePlanType
     * @return \Santosdave\Travelport\UniversalRecord\HotelRateInfo
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
      return $this;
    }

}
