<?php

namespace Santosdave\Travelport\GDSQueue;

class AlternateRoute
{

    /**
     * @var Leg $Leg
     */
    protected $Leg = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param Leg $Leg
     * @param typeRef $Key
     */
    public function __construct($Leg = null, $Key = null)
    {
      $this->Leg = $Leg;
      $this->Key = $Key;
    }

    /**
     * @return Leg
     */
    public function getLeg()
    {
      return $this->Leg;
    }

    /**
     * @param Leg $Leg
     * @return \Santosdave\Travelport\GDSQueue\AlternateRoute
     */
    public function setLeg($Leg)
    {
      $this->Leg = $Leg;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \Santosdave\Travelport\GDSQueue\AlternateRoute
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
