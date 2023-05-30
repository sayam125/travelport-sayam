<?php

namespace Santosdave\Travelport\UProfile;

class PseudoCityCode
{

    /**
     * @var typePCC $_
     */
    protected $_ = null;

    /**
     * @param typePCC $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typePCC
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typePCC $_
     * @return \Santosdave\Travelport\UProfile\PseudoCityCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
