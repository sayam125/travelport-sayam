<?php

namespace Santosdave\Travelport\UProfile;

class BranchBaseInfo
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var Phone $Phone
     */
    protected $Phone = null;

    /**
     * @param Address $Address
     * @param Phone $Phone
     */
    public function __construct($Address = null, $Phone = null)
    {
      $this->Address = $Address;
      $this->Phone = $Phone;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \Santosdave\Travelport\UProfile\BranchBaseInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return Phone
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param Phone $Phone
     * @return \Santosdave\Travelport\UProfile\BranchBaseInfo
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

}
