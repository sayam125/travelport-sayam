<?php

namespace Santosdave\Travelport\UniversalRecord;

class PenaltyFareInformation
{

    /**
     * @var typeFarePenalty $PenaltyInfo
     */
    protected $PenaltyInfo = null;

    /**
     * @var boolean $ProhibitPenaltyFares
     */
    protected $ProhibitPenaltyFares = null;

    /**
     * @param boolean $ProhibitPenaltyFares
     */
    public function __construct($ProhibitPenaltyFares = null)
    {
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
    }

    /**
     * @return typeFarePenalty
     */
    public function getPenaltyInfo()
    {
      return $this->PenaltyInfo;
    }

    /**
     * @param typeFarePenalty $PenaltyInfo
     * @return \Santosdave\Travelport\UniversalRecord\PenaltyFareInformation
     */
    public function setPenaltyInfo($PenaltyInfo)
    {
      $this->PenaltyInfo = $PenaltyInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitPenaltyFares()
    {
      return $this->ProhibitPenaltyFares;
    }

    /**
     * @param boolean $ProhibitPenaltyFares
     * @return \Santosdave\Travelport\UniversalRecord\PenaltyFareInformation
     */
    public function setProhibitPenaltyFares($ProhibitPenaltyFares)
    {
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
      return $this;
    }

}
