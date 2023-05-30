<?php

namespace Santosdave\Travelport\GDSQueue;

class DisfavoredProviders
{

    /**
     * @var Provider $Provider
     */
    protected $Provider = null;

    /**
     * @param Provider $Provider
     */
    public function __construct($Provider = null)
    {
      $this->Provider = $Provider;
    }

    /**
     * @return Provider
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param Provider $Provider
     * @return \Santosdave\Travelport\GDSQueue\DisfavoredProviders
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
      return $this;
    }

}
