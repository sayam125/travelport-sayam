<?php

namespace Santosdave\Travelport\Util;

class State
{

    /**
     * @var typeState $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var typeCountry $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param typeState $Code
     * @param string $Name
     * @param typeCountry $CountryCode
     */
    public function __construct($Code = null, $Name = null, $CountryCode = null)
    {
      $this->Code = $Code;
      $this->Name = $Name;
      $this->CountryCode = $CountryCode;
    }

    /**
     * @return typeState
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeState $Code
     * @return \Santosdave\Travelport\Util\State
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
     * @return \Santosdave\Travelport\Util\State
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param typeCountry $CountryCode
     * @return \Santosdave\Travelport\Util\State
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
