<?php

namespace Santosdave\Travelport\Rail;

class AirExchangeMulitQuoteList
{

    /**
     * @var AirExchangeMultiQuoteOption $AirExchangeMultiQuoteOption
     */
    protected $AirExchangeMultiQuoteOption = null;

    /**
     * @param AirExchangeMultiQuoteOption $AirExchangeMultiQuoteOption
     */
    public function __construct($AirExchangeMultiQuoteOption = null)
    {
      $this->AirExchangeMultiQuoteOption = $AirExchangeMultiQuoteOption;
    }

    /**
     * @return AirExchangeMultiQuoteOption
     */
    public function getAirExchangeMultiQuoteOption()
    {
      return $this->AirExchangeMultiQuoteOption;
    }

    /**
     * @param AirExchangeMultiQuoteOption $AirExchangeMultiQuoteOption
     * @return \Santosdave\Travelport\Rail\AirExchangeMulitQuoteList
     */
    public function setAirExchangeMultiQuoteOption($AirExchangeMultiQuoteOption)
    {
      $this->AirExchangeMultiQuoteOption = $AirExchangeMultiQuoteOption;
      return $this;
    }

}
