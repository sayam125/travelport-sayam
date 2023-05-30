<?php

namespace Santosdave\Travelport\UProfile;

class AccountCriteria extends typeAccountTypeProfileSearchCriteria
{

    /**
     * @var typeWildcard $Name
     */
    protected $Name = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @param typeWildcard $MidOfficeID
     * @param typeWildcard $Name
     */
    public function __construct($AdditionalIdentifier = null, $MidOfficeID = null, $Name = null)
    {
      parent::__construct($AdditionalIdentifier, $MidOfficeID);
      $this->Name = $Name;
    }

    /**
     * @return typeWildcard
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeWildcard $Name
     * @return \Santosdave\Travelport\UProfile\AccountCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
