<?php

namespace Santosdave\Travelport\Hotel;

class typeRoomDispatch
{

    /**
     * @var Room[] $Room
     */
    protected $Room = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Room[]
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param Room[] $Room
     * @return \Santosdave\Travelport\Hotel\typeRoomDispatch
     */
    public function setRoom(array $Room = null)
    {
      $this->Room = $Room;
      return $this;
    }

}
