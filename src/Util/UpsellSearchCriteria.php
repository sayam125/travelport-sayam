<?php

namespace Santosdave\Travelport\Util;

class UpsellSearchCriteria
{

    /**
     * @var EffectiveDate $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var ExpirationDate $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @param EffectiveDate $EffectiveDate
     * @param ExpirationDate $ExpirationDate
     */
    public function __construct($EffectiveDate = null, $ExpirationDate = null)
    {
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpirationDate = $ExpirationDate;
    }

    /**
     * @return EffectiveDate
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param EffectiveDate $EffectiveDate
     * @return \Santosdave\Travelport\Util\UpsellSearchCriteria
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return ExpirationDate
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param ExpirationDate $ExpirationDate
     * @return \Santosdave\Travelport\Util\UpsellSearchCriteria
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

}
