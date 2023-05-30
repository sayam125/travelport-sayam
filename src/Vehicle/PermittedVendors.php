<?php

namespace Santosdave\Travelport\Vehicle;

class PermittedVendors
{

    /**
     * @var Vendor $Vendor
     */
    protected $Vendor = null;

    /**
     * @param Vendor $Vendor
     */
    public function __construct($Vendor = null)
    {
      $this->Vendor = $Vendor;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param Vendor $Vendor
     * @return \Santosdave\Travelport\Vehicle\PermittedVendors
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

}
