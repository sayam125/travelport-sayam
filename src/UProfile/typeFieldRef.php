<?php

namespace Santosdave\Travelport\UProfile;

class typeFieldRef
{

    /**
     * @var typeFieldID $ID
     */
    protected $ID = null;

    /**
     * @param typeFieldID $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return typeFieldID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeFieldID $ID
     * @return \Santosdave\Travelport\UProfile\typeFieldRef
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
