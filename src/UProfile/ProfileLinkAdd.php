<?php

namespace Santosdave\Travelport\UProfile;

class ProfileLinkAdd
{

    /**
     * @var typeProfileID $TravelerID
     */
    protected $TravelerID = null;

    /**
     * @var typeProfileLinkRelationship $Relationship
     */
    protected $Relationship = null;

    /**
     * @param typeProfileID $TravelerID
     * @param typeProfileLinkRelationship $Relationship
     */
    public function __construct($TravelerID = null, $Relationship = null)
    {
      $this->TravelerID = $TravelerID;
      $this->Relationship = $Relationship;
    }

    /**
     * @return typeProfileID
     */
    public function getTravelerID()
    {
      return $this->TravelerID;
    }

    /**
     * @param typeProfileID $TravelerID
     * @return \Santosdave\Travelport\UProfile\ProfileLinkAdd
     */
    public function setTravelerID($TravelerID)
    {
      $this->TravelerID = $TravelerID;
      return $this;
    }

    /**
     * @return typeProfileLinkRelationship
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param typeProfileLinkRelationship $Relationship
     * @return \Santosdave\Travelport\UProfile\ProfileLinkAdd
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

}
