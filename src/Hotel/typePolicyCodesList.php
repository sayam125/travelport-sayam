<?php

namespace Santosdave\Travelport\Hotel;

class typePolicyCodesList
{

    /**
     * @var PolicyCode[] $PolicyCode
     */
    protected $PolicyCode = null;

    /**
     * @var MinPolicyCode[] $MinPolicyCode
     */
    protected $MinPolicyCode = null;

    /**
     * @var MaxPolicyCode[] $MaxPolicyCode
     */
    protected $MaxPolicyCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PolicyCode[]
     */
    public function getPolicyCode()
    {
      return $this->PolicyCode;
    }

    /**
     * @param PolicyCode[] $PolicyCode
     * @return \Santosdave\Travelport\Hotel\typePolicyCodesList
     */
    public function setPolicyCode(array $PolicyCode = null)
    {
      $this->PolicyCode = $PolicyCode;
      return $this;
    }

    /**
     * @return MinPolicyCode[]
     */
    public function getMinPolicyCode()
    {
      return $this->MinPolicyCode;
    }

    /**
     * @param MinPolicyCode[] $MinPolicyCode
     * @return \Santosdave\Travelport\Hotel\typePolicyCodesList
     */
    public function setMinPolicyCode(array $MinPolicyCode = null)
    {
      $this->MinPolicyCode = $MinPolicyCode;
      return $this;
    }

    /**
     * @return MaxPolicyCode[]
     */
    public function getMaxPolicyCode()
    {
      return $this->MaxPolicyCode;
    }

    /**
     * @param MaxPolicyCode[] $MaxPolicyCode
     * @return \Santosdave\Travelport\Hotel\typePolicyCodesList
     */
    public function setMaxPolicyCode(array $MaxPolicyCode = null)
    {
      $this->MaxPolicyCode = $MaxPolicyCode;
      return $this;
    }

}
