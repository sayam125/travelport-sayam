<?php

namespace Santosdave\Travelport\Util;

class PassengerReceiptOverride
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
     * @return \Santosdave\Travelport\Util\PassengerReceiptOverride
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
