<?php

namespace Santosdave\Travelport\Util;

class typeEmailAddress
{

    /**
     * @var Email $Email
     */
    protected $Email = null;

    /**
     * @var string $SimpleName
     */
    protected $SimpleName = null;

    /**
     * @param Email $Email
     * @param string $SimpleName
     */
    public function __construct($Email = null, $SimpleName = null)
    {
      $this->Email = $Email;
      $this->SimpleName = $SimpleName;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param Email $Email
     * @return \Santosdave\Travelport\Util\typeEmailAddress
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getSimpleName()
    {
      return $this->SimpleName;
    }

    /**
     * @param string $SimpleName
     * @return \Santosdave\Travelport\Util\typeEmailAddress
     */
    public function setSimpleName($SimpleName)
    {
      $this->SimpleName = $SimpleName;
      return $this;
    }

}
