<?php

namespace Santosdave\Travelport\Rail;

class AddressRestriction
{

    /**
     * @var RequiredField $RequiredField
     */
    protected $RequiredField = null;

    /**
     * @param RequiredField $RequiredField
     */
    public function __construct($RequiredField = null)
    {
      $this->RequiredField = $RequiredField;
    }

    /**
     * @return RequiredField
     */
    public function getRequiredField()
    {
      return $this->RequiredField;
    }

    /**
     * @param RequiredField $RequiredField
     * @return \Santosdave\Travelport\Rail\AddressRestriction
     */
    public function setRequiredField($RequiredField)
    {
      $this->RequiredField = $RequiredField;
      return $this;
    }

}
