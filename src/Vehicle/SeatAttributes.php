<?php

namespace Santosdave\Travelport\Vehicle;

class SeatAttributes
{

    /**
     * @var SeatAttribute $SeatAttribute
     */
    protected $SeatAttribute = null;

    /**
     * @param SeatAttribute $SeatAttribute
     */
    public function __construct($SeatAttribute = null)
    {
      $this->SeatAttribute = $SeatAttribute;
    }

    /**
     * @return SeatAttribute
     */
    public function getSeatAttribute()
    {
      return $this->SeatAttribute;
    }

    /**
     * @param SeatAttribute $SeatAttribute
     * @return \Santosdave\Travelport\Vehicle\SeatAttributes
     */
    public function setSeatAttribute($SeatAttribute)
    {
      $this->SeatAttribute = $SeatAttribute;
      return $this;
    }

}
