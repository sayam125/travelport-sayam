<?php

namespace Santosdave\Travelport\Air;

class ListRetrieve
{

    /**
     * @var typeProviderReservationDetail $ProviderReservationDetail
     */
    protected $ProviderReservationDetail = null;

    /**
     * @param typeProviderReservationDetail $ProviderReservationDetail
     */
    public function __construct($ProviderReservationDetail = null)
    {
      $this->ProviderReservationDetail = $ProviderReservationDetail;
    }

    /**
     * @return typeProviderReservationDetail
     */
    public function getProviderReservationDetail()
    {
      return $this->ProviderReservationDetail;
    }

    /**
     * @param typeProviderReservationDetail $ProviderReservationDetail
     * @return \Santosdave\Travelport\Air\ListRetrieve
     */
    public function setProviderReservationDetail($ProviderReservationDetail)
    {
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      return $this;
    }

}
