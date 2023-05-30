<?php

namespace Santosdave\Travelport\Util;

class EffectiveDate
{

    /**
     * @var typeDate $EarliestDate
     */
    protected $EarliestDate = null;

    /**
     * @var typeDate $LatestDate
     */
    protected $LatestDate = null;

    /**
     * @param typeDate $EarliestDate
     * @param typeDate $LatestDate
     */
    public function __construct($EarliestDate = null, $LatestDate = null)
    {
      $this->EarliestDate = $EarliestDate;
      $this->LatestDate = $LatestDate;
    }

    /**
     * @return typeDate
     */
    public function getEarliestDate()
    {
      return $this->EarliestDate;
    }

    /**
     * @param typeDate $EarliestDate
     * @return \Santosdave\Travelport\Util\EffectiveDate
     */
    public function setEarliestDate($EarliestDate)
    {
      $this->EarliestDate = $EarliestDate;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getLatestDate()
    {
      return $this->LatestDate;
    }

    /**
     * @param typeDate $LatestDate
     * @return \Santosdave\Travelport\Util\EffectiveDate
     */
    public function setLatestDate($LatestDate)
    {
      $this->LatestDate = $LatestDate;
      return $this;
    }

}
