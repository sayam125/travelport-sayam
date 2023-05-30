<?php

namespace Santosdave\Travelport\Rail;

class RateInclusions
{

    /**
     * @var IncludedItem $IncludedItem
     */
    protected $IncludedItem = null;

    /**
     * @param IncludedItem $IncludedItem
     */
    public function __construct($IncludedItem = null)
    {
      $this->IncludedItem = $IncludedItem;
    }

    /**
     * @return IncludedItem
     */
    public function getIncludedItem()
    {
      return $this->IncludedItem;
    }

    /**
     * @param IncludedItem $IncludedItem
     * @return \Santosdave\Travelport\Rail\RateInclusions
     */
    public function setIncludedItem($IncludedItem)
    {
      $this->IncludedItem = $IncludedItem;
      return $this;
    }

}
