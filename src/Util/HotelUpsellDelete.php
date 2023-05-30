<?php

namespace Santosdave\Travelport\Util;

class HotelUpsellDelete
{

    /**
     * @var typeRef $QualifyRef
     */
    protected $QualifyRef = null;

    /**
     * @var typeRef $OfferRef
     */
    protected $OfferRef = null;

    /**
     * @param typeRef $QualifyRef
     * @param typeRef $OfferRef
     */
    public function __construct($QualifyRef = null, $OfferRef = null)
    {
      $this->QualifyRef = $QualifyRef;
      $this->OfferRef = $OfferRef;
    }

    /**
     * @return typeRef
     */
    public function getQualifyRef()
    {
      return $this->QualifyRef;
    }

    /**
     * @param typeRef $QualifyRef
     * @return \Santosdave\Travelport\Util\HotelUpsellDelete
     */
    public function setQualifyRef($QualifyRef)
    {
      $this->QualifyRef = $QualifyRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOfferRef()
    {
      return $this->OfferRef;
    }

    /**
     * @param typeRef $OfferRef
     * @return \Santosdave\Travelport\Util\HotelUpsellDelete
     */
    public function setOfferRef($OfferRef)
    {
      $this->OfferRef = $OfferRef;
      return $this;
    }

}
