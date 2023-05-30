<?php

namespace Santosdave\Travelport\GDSQueue;

class RuleInfo
{

    /**
     * @var ChargesRules $ChargesRules
     */
    protected $ChargesRules = null;

    /**
     * @param ChargesRules $ChargesRules
     */
    public function __construct($ChargesRules = null)
    {
      $this->ChargesRules = $ChargesRules;
    }

    /**
     * @return ChargesRules
     */
    public function getChargesRules()
    {
      return $this->ChargesRules;
    }

    /**
     * @param ChargesRules $ChargesRules
     * @return \Santosdave\Travelport\GDSQueue\RuleInfo
     */
    public function setChargesRules($ChargesRules)
    {
      $this->ChargesRules = $ChargesRules;
      return $this;
    }

}
