<?php

namespace Santosdave\Travelport\Air;

class UnassociatedBookingCodeList
{

    /**
     * @var typeApplicableSegment[] $ApplicableSegment
     */
    protected $ApplicableSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeApplicableSegment[]
     */
    public function getApplicableSegment()
    {
      return $this->ApplicableSegment;
    }

    /**
     * @param typeApplicableSegment[] $ApplicableSegment
     * @return \Santosdave\Travelport\Air\UnassociatedBookingCodeList
     */
    public function setApplicableSegment(array $ApplicableSegment = null)
    {
      $this->ApplicableSegment = $ApplicableSegment;
      return $this;
    }

}
