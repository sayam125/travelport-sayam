<?php

namespace Santosdave\Travelport\UniversalRecord;

class IndustryStandardSSR
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
     * @return \Santosdave\Travelport\UniversalRecord\IndustryStandardSSR
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
