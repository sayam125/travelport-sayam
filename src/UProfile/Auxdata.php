<?php

namespace Santosdave\Travelport\UProfile;

class Auxdata
{

    /**
     * @var Entry[] $Entry
     */
    protected $Entry = null;

    /**
     * @param Entry[] $Entry
     */
    public function __construct(array $Entry = null)
    {
      $this->Entry = $Entry;
    }

    /**
     * @return Entry[]
     */
    public function getEntry()
    {
      return $this->Entry;
    }

    /**
     * @param Entry[] $Entry
     * @return \Santosdave\Travelport\UProfile\Auxdata
     */
    public function setEntry(array $Entry)
    {
      $this->Entry = $Entry;
      return $this;
    }

}
