<?php

namespace Santosdave\Travelport\Air;

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
     * @return \Santosdave\Travelport\Air\TravelerType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
