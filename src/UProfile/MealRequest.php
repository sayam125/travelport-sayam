<?php

namespace Santosdave\Travelport\UProfile;

class MealRequest
{

    /**
     * @var anonymous65 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous65 $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return anonymous65
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous65 $Type
     * @return \Santosdave\Travelport\UProfile\MealRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
