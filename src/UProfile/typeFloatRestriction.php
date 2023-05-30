<?php

namespace Santosdave\Travelport\UProfile;

class typeFloatRestriction
{

    /**
     * @var typeFloatRestrictionValue $MinValue
     */
    protected $MinValue = null;

    /**
     * @var typeFloatRestrictionValue $MaxValue
     */
    protected $MaxValue = null;

    /**
     * @param typeFloatRestrictionValue $MinValue
     * @param typeFloatRestrictionValue $MaxValue
     */
    public function __construct($MinValue = null, $MaxValue = null)
    {
      $this->MinValue = $MinValue;
      $this->MaxValue = $MaxValue;
    }

    /**
     * @return typeFloatRestrictionValue
     */
    public function getMinValue()
    {
      return $this->MinValue;
    }

    /**
     * @param typeFloatRestrictionValue $MinValue
     * @return \Santosdave\Travelport\UProfile\typeFloatRestriction
     */
    public function setMinValue($MinValue)
    {
      $this->MinValue = $MinValue;
      return $this;
    }

    /**
     * @return typeFloatRestrictionValue
     */
    public function getMaxValue()
    {
      return $this->MaxValue;
    }

    /**
     * @param typeFloatRestrictionValue $MaxValue
     * @return \Santosdave\Travelport\UProfile\typeFloatRestriction
     */
    public function setMaxValue($MaxValue)
    {
      $this->MaxValue = $MaxValue;
      return $this;
    }

}
