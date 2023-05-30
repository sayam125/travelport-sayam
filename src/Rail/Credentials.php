<?php

namespace Santosdave\Travelport\Rail;

class Credentials
{

    /**
     * @var anonymous25 $UserId
     */
    protected $UserId = null;

    /**
     * @param anonymous25 $UserId
     */
    public function __construct($UserId = null)
    {
      $this->UserId = $UserId;
    }

    /**
     * @return anonymous25
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param anonymous25 $UserId
     * @return \Santosdave\Travelport\Rail\Credentials
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

}
