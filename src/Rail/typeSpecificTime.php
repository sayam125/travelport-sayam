<?php

namespace Santosdave\Travelport\Rail;

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
     * @return \Santosdave\Travelport\Rail\typeSpecificTime
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
