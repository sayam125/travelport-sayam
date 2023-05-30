<?php

namespace Santosdave\Travelport\Util;

class BrandedFareSearchModifier
{

    /**
     * @var typeMaxResults $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @var typeStartFromResult $StartFromResult
     */
    protected $StartFromResult = null;

    /**
     * @param typeMaxResults $MaxResults
     * @param typeStartFromResult $StartFromResult
     */
    public function __construct($MaxResults = null, $StartFromResult = null)
    {
      $this->MaxResults = $MaxResults;
      $this->StartFromResult = $StartFromResult;
    }

    /**
     * @return typeMaxResults
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param typeMaxResults $MaxResults
     * @return \Santosdave\Travelport\Util\BrandedFareSearchModifier
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

    /**
     * @return typeStartFromResult
     */
    public function getStartFromResult()
    {
      return $this->StartFromResult;
    }

    /**
     * @param typeStartFromResult $StartFromResult
     * @return \Santosdave\Travelport\Util\BrandedFareSearchModifier
     */
    public function setStartFromResult($StartFromResult)
    {
      $this->StartFromResult = $StartFromResult;
      return $this;
    }

}
