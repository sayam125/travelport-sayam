<?php

namespace Santosdave\Travelport\Util;

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
     * @return \Santosdave\Travelport\Util\SeatAttributes
     */
    public function setSeatAttribute($SeatAttribute)
    {
      $this->SeatAttribute = $SeatAttribute;
      return $this;
    }

}
