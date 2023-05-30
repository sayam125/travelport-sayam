<?php

namespace Santosdave\Travelport\Rail;

class TravelerType
{

    /**
     * @var typePTC $Code
     */
    protected $Code = null;

    /**
     * @param typePTC $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typePTC
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typePTC $Code
     * @return \Santosdave\Travelport\Rail\TravelerType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
