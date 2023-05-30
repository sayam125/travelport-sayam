<?php

namespace Santosdave\Travelport\Util;

class AddlBookingCodeInformation
{

    /**
     * @var typeNonBlanks $_
     */
    protected $_ = null;

    /**
     * @param typeNonBlanks $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typeNonBlanks
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeNonBlanks $_
     * @return \Santosdave\Travelport\Util\AddlBookingCodeInformation
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
