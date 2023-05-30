<?php

namespace Santosdave\Travelport\UniversalRecord;

class DisfavoredAlliances
{

    /**
     * @var Alliance $Alliance
     */
    protected $Alliance = null;

    /**
     * @param Alliance $Alliance
     */
    public function __construct($Alliance = null)
    {
      $this->Alliance = $Alliance;
    }

    /**
     * @return Alliance
     */
    public function getAlliance()
    {
      return $this->Alliance;
    }

    /**
     * @param Alliance $Alliance
     * @return \Santosdave\Travelport\UniversalRecord\DisfavoredAlliances
     */
    public function setAlliance($Alliance)
    {
      $this->Alliance = $Alliance;
      return $this;
    }

}
