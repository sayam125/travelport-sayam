<?php

namespace Santosdave\Travelport\Util;

class AirFareRulesModifier
{

    /**
     * @var AirFareRuleCategory $AirFareRuleCategory
     */
    protected $AirFareRuleCategory = null;

    /**
     * @param AirFareRuleCategory $AirFareRuleCategory
     */
    public function __construct($AirFareRuleCategory = null)
    {
      $this->AirFareRuleCategory = $AirFareRuleCategory;
    }

    /**
     * @return AirFareRuleCategory
     */
    public function getAirFareRuleCategory()
    {
      return $this->AirFareRuleCategory;
    }

    /**
     * @param AirFareRuleCategory $AirFareRuleCategory
     * @return \Santosdave\Travelport\Util\AirFareRulesModifier
     */
    public function setAirFareRuleCategory($AirFareRuleCategory)
    {
      $this->AirFareRuleCategory = $AirFareRuleCategory;
      return $this;
    }

}
