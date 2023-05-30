<?php

namespace Santosdave\Travelport\System;

class RequiredField
{

    /**
     * @var anonymous398 $Name
     */
    protected $Name = null;

    /**
     * @param anonymous398 $Name
     */
    public function __construct($Name = null)
    {
      $this->Name = $Name;
    }

    /**
     * @return anonymous398
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous398 $Name
     * @return \Santosdave\Travelport\System\RequiredField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
