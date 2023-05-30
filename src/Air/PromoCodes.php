<?php

namespace Santosdave\Travelport\Air;

class PromoCodes
{

    /**
     * @var PromoCode $PromoCode
     */
    protected $PromoCode = null;

    /**
     * @param PromoCode $PromoCode
     */
    public function __construct($PromoCode = null)
    {
      $this->PromoCode = $PromoCode;
    }

    /**
     * @return PromoCode
     */
    public function getPromoCode()
    {
      return $this->PromoCode;
    }

    /**
     * @param PromoCode $PromoCode
     * @return \Santosdave\Travelport\Air\PromoCodes
     */
    public function setPromoCode($PromoCode)
    {
      $this->PromoCode = $PromoCode;
      return $this;
    }

}
