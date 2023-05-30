<?php

namespace Santosdave\Travelport\Rail;

class ExcludeTicketing
{

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \Santosdave\Travelport\Rail\ExcludeTicketing
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
