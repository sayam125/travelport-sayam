<?php

namespace Santosdave\Travelport\Rail;

class LocationInformation
{

    /**
     * @var typeStructuredAddress $Address
     */
    protected $Address = null;

    /**
     * @var typeVehicleLocation $LocationType
     */
    protected $LocationType = null;

    /**
     * @var string $AreaGroup
     */
    protected $AreaGroup = null;

    /**
     * @var typeIATACode $Location
     */
    protected $Location = null;

    /**
     * @var typeAreaInfo $AreaType
     */
    protected $AreaType = null;

    /**
     * @param typeVehicleLocation $LocationType
     * @param string $AreaGroup
     * @param typeIATACode $Location
     * @param typeAreaInfo $AreaType
     */
    public function __construct($LocationType = null, $AreaGroup = null, $Location = null, $AreaType = null)
    {
      $this->LocationType = $LocationType;
      $this->AreaGroup = $AreaGroup;
      $this->Location = $Location;
      $this->AreaType = $AreaType;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeStructuredAddress $Address
     * @return \Santosdave\Travelport\Rail\LocationInformation
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return typeVehicleLocation
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param typeVehicleLocation $LocationType
     * @return \Santosdave\Travelport\Rail\LocationInformation
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaGroup()
    {
      return $this->AreaGroup;
    }

    /**
     * @param string $AreaGroup
     * @return \Santosdave\Travelport\Rail\LocationInformation
     */
    public function setAreaGroup($AreaGroup)
    {
      $this->AreaGroup = $AreaGroup;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeIATACode $Location
     * @return \Santosdave\Travelport\Rail\LocationInformation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return typeAreaInfo
     */
    public function getAreaType()
    {
      return $this->AreaType;
    }

    /**
     * @param typeAreaInfo $AreaType
     * @return \Santosdave\Travelport\Rail\LocationInformation
     */
    public function setAreaType($AreaType)
    {
      $this->AreaType = $AreaType;
      return $this;
    }

}
