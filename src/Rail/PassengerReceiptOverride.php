<?php

namespace Santosdave\Travelport\Rail;

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
     * @return \Santosdave\Travelport\Rail\PassengerReceiptOverride
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
