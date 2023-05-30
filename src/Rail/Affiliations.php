<?php

namespace Santosdave\Travelport\Rail;

class Affiliations
{

    /**
     * @var TravelArranger $TravelArranger
     */
    protected $TravelArranger = null;

    /**
     * @param TravelArranger $TravelArranger
     */
    public function __construct($TravelArranger = null)
    {
      $this->TravelArranger = $TravelArranger;
    }

    /**
     * @return TravelArranger
     */
    public function getTravelArranger()
    {
      return $this->TravelArranger;
    }

    /**
     * @param TravelArranger $TravelArranger
     * @return \Santosdave\Travelport\Rail\Affiliations
     */
    public function setTravelArranger($TravelArranger)
    {
      $this->TravelArranger = $TravelArranger;
      return $this;
    }

}
