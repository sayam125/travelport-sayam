<?php

namespace Santosdave\Travelport\Util;

class Carrier
{

    /**
     * @var typeCarrier $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param typeCarrier $Code
     * @param string $Name
     * @param string $Type
     */
    public function __construct($Code = null, $Name = null, $Type = null)
    {
      $this->Code = $Code;
      $this->Name = $Name;
      $this->Type = $Type;
    }

    /**
     * @return typeCarrier
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeCarrier $Code
     * @return \Santosdave\Travelport\Util\Carrier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Santosdave\Travelport\Util\Carrier
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Santosdave\Travelport\Util\Carrier
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
