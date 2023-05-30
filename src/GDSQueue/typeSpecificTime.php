<?php

namespace Santosdave\Travelport\GDSQueue;

class typeSpecificTime
{

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @param string $Time
     */
    public function __construct($Time = null)
    {
      $this->Time = $Time;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param string $Time
     * @return \Santosdave\Travelport\GDSQueue\typeSpecificTime
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
