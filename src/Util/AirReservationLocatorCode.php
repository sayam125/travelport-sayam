<?php

namespace Santosdave\Travelport\Util;

class AirReservationLocatorCode
{

    /**
     * @var typeLocatorCode $_
     */
    protected $_ = null;

    /**
     * @param typeLocatorCode $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typeLocatorCode
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeLocatorCode $_
     * @return \Santosdave\Travelport\Util\AirReservationLocatorCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
