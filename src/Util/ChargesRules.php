<?php

namespace Santosdave\Travelport\Util;

class ChargesRules
{

    /**
     * @var VoluntaryChanges[] $VoluntaryChanges
     */
    protected $VoluntaryChanges = null;

    /**
     * @var VoluntaryRefunds[] $VoluntaryRefunds
     */
    protected $VoluntaryRefunds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VoluntaryChanges[]
     */
    public function getVoluntaryChanges()
    {
      return $this->VoluntaryChanges;
    }

    /**
     * @param VoluntaryChanges[] $VoluntaryChanges
     * @return \Santosdave\Travelport\Util\ChargesRules
     */
    public function setVoluntaryChanges(array $VoluntaryChanges = null)
    {
      $this->VoluntaryChanges = $VoluntaryChanges;
      return $this;
    }

    /**
     * @return VoluntaryRefunds[]
     */
    public function getVoluntaryRefunds()
    {
      return $this->VoluntaryRefunds;
    }

    /**
     * @param VoluntaryRefunds[] $VoluntaryRefunds
     * @return \Santosdave\Travelport\Util\ChargesRules
     */
    public function setVoluntaryRefunds(array $VoluntaryRefunds = null)
    {
      $this->VoluntaryRefunds = $VoluntaryRefunds;
      return $this;
    }

}
