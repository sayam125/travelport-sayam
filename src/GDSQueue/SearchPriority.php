<?php

namespace Santosdave\Travelport\GDSQueue;

class SearchPriority
{

    /**
     * @var Criteria[] $Criteria
     */
    protected $Criteria = null;

    /**
     * @param Criteria[] $Criteria
     */
    public function __construct(array $Criteria = null)
    {
      $this->Criteria = $Criteria;
    }

    /**
     * @return Criteria[]
     */
    public function getCriteria()
    {
      return $this->Criteria;
    }

    /**
     * @param Criteria[] $Criteria
     * @return \Santosdave\Travelport\GDSQueue\SearchPriority
     */
    public function setCriteria(array $Criteria)
    {
      $this->Criteria = $Criteria;
      return $this;
    }

}
