<?php

namespace Santosdave\Travelport\UProfile;

class typeCustomFieldAndGroupDeleteRef
{

    /**
     * @var typeID $ID
     */
    protected $ID = null;

    /**
     * @param typeID $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return typeID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeID $ID
     * @return \Santosdave\Travelport\UProfile\typeCustomFieldAndGroupDeleteRef
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
