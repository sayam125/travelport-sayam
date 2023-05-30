<?php

namespace Santosdave\Travelport\Air;

class AirExchangeBundleTotal
{

    /**
     * @var AirExchangeInfo $AirExchangeInfo
     */
    protected $AirExchangeInfo = null;

    /**
     * @var Penalty $Penalty
     */
    protected $Penalty = null;

    /**
     * @param AirExchangeInfo $AirExchangeInfo
     * @param Penalty $Penalty
     */
    public function __construct($AirExchangeInfo = null, $Penalty = null)
    {
      $this->AirExchangeInfo = $AirExchangeInfo;
      $this->Penalty = $Penalty;
    }

    /**
     * @return AirExchangeInfo
     */
    public function getAirExchangeInfo()
    {
      return $this->AirExchangeInfo;
    }

    /**
     * @param AirExchangeInfo $AirExchangeInfo
     * @return \Santosdave\Travelport\Air\AirExchangeBundleTotal
     */
    public function setAirExchangeInfo($AirExchangeInfo)
    {
      $this->AirExchangeInfo = $AirExchangeInfo;
      return $this;
    }

    /**
     * @return Penalty
     */
    public function getPenalty()
    {
      return $this->Penalty;
    }

    /**
     * @param Penalty $Penalty
     * @return \Santosdave\Travelport\Air\AirExchangeBundleTotal
     */
    public function setPenalty($Penalty)
    {
      $this->Penalty = $Penalty;
      return $this;
    }

}
