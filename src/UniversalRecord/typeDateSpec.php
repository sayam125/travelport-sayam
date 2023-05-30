<?php

namespace Santosdave\Travelport\UniversalRecord;

class typeDateSpec
{

    /**
     * @var typeDateRange $DateRange
     */
    protected $DateRange = null;

    /**
     * @var date $SpecificDate
     */
    protected $SpecificDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeDateRange
     */
    public function getDateRange()
    {
      return $this->DateRange;
    }

    /**
     * @param typeDateRange $DateRange
     * @return \Santosdave\Travelport\UniversalRecord\typeDateSpec
     */
    public function setDateRange($DateRange)
    {
      $this->DateRange = $DateRange;
      return $this;
    }

    /**
     * @return date
     */
    public function getSpecificDate()
    {
      return $this->SpecificDate;
    }

    /**
     * @param date $SpecificDate
     * @return \Santosdave\Travelport\UniversalRecord\typeDateSpec
     */
    public function setSpecificDate($SpecificDate)
    {
      $this->SpecificDate = $SpecificDate;
      return $this;
    }

}
