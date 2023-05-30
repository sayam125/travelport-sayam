<?php

namespace Santosdave\Travelport\GDSQueue;

class RailSupplier
{

    /**
     * @var typeSupplierCode $Code
     */
    protected $Code = null;

    /**
     * @param typeSupplierCode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
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
     * @return \Santosdave\Travelport\GDSQueue\RailSupplier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
