<?php

namespace Santosdave\Travelport\GDSQueue;

class VendorInfo
{

    /**
     * @var typeSupplierCode $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param typeSupplierCode $Code
     * @param string $Name
     */
    public function __construct($Code = null, $Name = null)
    {
      $this->Code = $Code;
      $this->Name = $Name;
    }

    /**
     * @return typeSupplierCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeSupplierCode $Code
     * @return \Santosdave\Travelport\GDSQueue\VendorInfo
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
     * @return \Santosdave\Travelport\GDSQueue\VendorInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
