<?php

namespace Santosdave\Travelport\UniversalRecord;

class FareRemarkList
{

    /**
     * @var FareRemark $FareRemark
     */
    protected $FareRemark = null;

    /**
     * @param FareRemark $FareRemark
     */
    public function __construct($FareRemark = null)
    {
      $this->FareRemark = $FareRemark;
    }

    /**
     * @return FareRemark
     */
    public function getFareRemark()
    {
      return $this->FareRemark;
    }

    /**
     * @param FareRemark $FareRemark
     * @return \Santosdave\Travelport\UniversalRecord\FareRemarkList
     */
    public function setFareRemark($FareRemark)
    {
      $this->FareRemark = $FareRemark;
      return $this;
    }

}
