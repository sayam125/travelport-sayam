<?php

namespace Santosdave\Travelport\UniversalRecord;

class DriverInfo
{

    /**
     * @var anonymous1154 $Age
     */
    protected $Age = null;

    /**
     * @param anonymous1154 $Age
     */
    public function __construct($Age = null)
    {
      $this->Age = $Age;
    }

    /**
     * @return anonymous1154
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param anonymous1154 $Age
     * @return \Santosdave\Travelport\UniversalRecord\DriverInfo
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
