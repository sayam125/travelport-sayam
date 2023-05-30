<?php

namespace Santosdave\Travelport\UniversalRecord;

class HotelAlternateProperties
{

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @param HotelProperty $HotelProperty
     */
    public function __construct($HotelProperty = null)
    {
      $this->HotelProperty = $HotelProperty;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \Santosdave\Travelport\UniversalRecord\HotelAlternateProperties
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

}
