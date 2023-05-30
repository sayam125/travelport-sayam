<?php

namespace Santosdave\Travelport\Hotel;

class HotelType
{

    /**
     * @var typeSourceLink $SourceLink
     */
    protected $SourceLink = null;

    /**
     * @param typeSourceLink $SourceLink
     */
    public function __construct($SourceLink = null)
    {
      $this->SourceLink = $SourceLink;
    }

    /**
     * @return typeSourceLink
     */
    public function getSourceLink()
    {
      return $this->SourceLink;
    }

    /**
     * @param typeSourceLink $SourceLink
     * @return \Santosdave\Travelport\Hotel\HotelType
     */
    public function setSourceLink($SourceLink)
    {
      $this->SourceLink = $SourceLink;
      return $this;
    }

}
