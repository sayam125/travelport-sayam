<?php

namespace Santosdave\Travelport\Air;

class Refundability
{

    /**
     * @var typeRefundabilityValue $Value
     */
    protected $Value = null;

    /**
     * @param typeRefundabilityValue $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typeRefundabilityValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeRefundabilityValue $Value
     * @return \Santosdave\Travelport\Air\Refundability
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
