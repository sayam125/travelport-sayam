<?php

namespace Santosdave\Travelport\UniversalRecord;

class typeFailureInfo
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param int $Code
     * @param string $Message
     */
    public function __construct($Code = null, $Message = null)
    {
      $this->Code = $Code;
      $this->Message = $Message;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \Santosdave\Travelport\UniversalRecord\typeFailureInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Santosdave\Travelport\UniversalRecord\typeFailureInfo
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
