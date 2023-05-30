<?php

namespace Santosdave\Travelport\UniversalRecord;

class Alliance
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Santosdave\Travelport\UniversalRecord\Alliance
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
