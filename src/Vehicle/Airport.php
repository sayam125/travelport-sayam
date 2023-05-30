<?php

namespace Santosdave\Travelport\Vehicle;

class Airport extends Location
{

    /**
     * @var typeIATACode $Code
     */
    protected $Code = null;

    /**
     * @param typeIATACode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeIATACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeIATACode $Code
     * @return \Santosdave\Travelport\Vehicle\Airport
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
