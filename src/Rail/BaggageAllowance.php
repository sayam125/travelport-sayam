<?php

namespace Santosdave\Travelport\Rail;

class BaggageAllowance
{

    /**
     * @var int $NumberOfPieces
     */
    protected $NumberOfPieces = null;

    /**
     * @var typeWeight $MaxWeight
     */
    protected $MaxWeight = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getNumberOfPieces()
    {
      return $this->NumberOfPieces;
    }

    /**
     * @param int $NumberOfPieces
     * @return \Santosdave\Travelport\Rail\BaggageAllowance
     */
    public function setNumberOfPieces($NumberOfPieces)
    {
      $this->NumberOfPieces = $NumberOfPieces;
      return $this;
    }

    /**
     * @return typeWeight
     */
    public function getMaxWeight()
    {
      return $this->MaxWeight;
    }

    /**
     * @param typeWeight $MaxWeight
     * @return \Santosdave\Travelport\Rail\BaggageAllowance
     */
    public function setMaxWeight($MaxWeight)
    {
      $this->MaxWeight = $MaxWeight;
      return $this;
    }

}
