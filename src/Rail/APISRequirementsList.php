<?php

namespace Santosdave\Travelport\Rail;

class APISRequirementsList
{

    /**
     * @var APISRequirements $APISRequirements
     */
    protected $APISRequirements = null;

    /**
     * @param APISRequirements $APISRequirements
     */
    public function __construct($APISRequirements = null)
    {
      $this->APISRequirements = $APISRequirements;
    }

    /**
     * @return APISRequirements
     */
    public function getAPISRequirements()
    {
      return $this->APISRequirements;
    }

    /**
     * @param APISRequirements $APISRequirements
     * @return \Santosdave\Travelport\Rail\APISRequirementsList
     */
    public function setAPISRequirements($APISRequirements)
    {
      $this->APISRequirements = $APISRequirements;
      return $this;
    }

}
