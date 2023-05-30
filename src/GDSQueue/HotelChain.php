<?php

namespace Santosdave\Travelport\GDSQueue;

class HotelChain
{

    /**
     * @var typeHotelChainCode $Code
     */
    protected $Code = null;

    /**
     * @param typeHotelChainCode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeHotelChainCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeHotelChainCode $Code
     * @return \Santosdave\Travelport\GDSQueue\HotelChain
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
