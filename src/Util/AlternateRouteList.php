<?php

namespace Santosdave\Travelport\Util;

class AlternateRouteList
{

    /**
     * @var AlternateRoute $AlternateRoute
     */
    protected $AlternateRoute = null;

    /**
     * @param AlternateRoute $AlternateRoute
     */
    public function __construct($AlternateRoute = null)
    {
      $this->AlternateRoute = $AlternateRoute;
    }

    /**
     * @return AlternateRoute
     */
    public function getAlternateRoute()
    {
      return $this->AlternateRoute;
    }

    /**
     * @param AlternateRoute $AlternateRoute
     * @return \Santosdave\Travelport\Util\AlternateRouteList
     */
    public function setAlternateRoute($AlternateRoute)
    {
      $this->AlternateRoute = $AlternateRoute;
      return $this;
    }

}
