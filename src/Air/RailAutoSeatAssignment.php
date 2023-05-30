<?php

namespace Santosdave\Travelport\Air;

class RailAutoSeatAssignment
{

    /**
     * @var anonymous600 $SeatType
     */
    protected $SeatType = null;

    /**
     * @var anonymous601 $SeatValue
     */
    protected $SeatValue = null;

    /**
     * @var typeRef $RailSegmentRef
     */
    protected $RailSegmentRef = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param anonymous600 $SeatType
     * @param anonymous601 $SeatValue
     * @param typeRef $RailSegmentRef
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($SeatType = null, $SeatValue = null, $RailSegmentRef = null, $BookingTravelerRef = null)
    {
      $this->SeatType = $SeatType;
      $this->SeatValue = $SeatValue;
      $this->RailSegmentRef = $RailSegmentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return anonymous600
     */
    public function getSeatType()
    {
      return $this->SeatType;
    }

    /**
     * @param anonymous600 $SeatType
     * @return \Santosdave\Travelport\Air\RailAutoSeatAssignment
     */
    public function setSeatType($SeatType)
    {
      $this->SeatType = $SeatType;
      return $this;
    }

    /**
     * @return anonymous601
     */
    public function getSeatValue()
    {
      return $this->SeatValue;
    }

    /**
     * @param anonymous601 $SeatValue
     * @return \Santosdave\Travelport\Air\RailAutoSeatAssignment
     */
    public function setSeatValue($SeatValue)
    {
      $this->SeatValue = $SeatValue;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getRailSegmentRef()
    {
      return $this->RailSegmentRef;
    }

    /**
     * @param typeRef $RailSegmentRef
     * @return \Santosdave\Travelport\Air\RailAutoSeatAssignment
     */
    public function setRailSegmentRef($RailSegmentRef)
    {
      $this->RailSegmentRef = $RailSegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \Santosdave\Travelport\Air\RailAutoSeatAssignment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
