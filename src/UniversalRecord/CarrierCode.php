<?php

namespace Santosdave\Travelport\UniversalRecord;

class CarrierCode
{

    /**
     * @var typeCarrier $_
     */
    protected $_ = null;

    /**
     * @param typeCarrier $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typeCarrier
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeCarrier $_
     * @return \Santosdave\Travelport\UniversalRecord\CarrierCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
