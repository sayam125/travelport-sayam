<?php

namespace Santosdave\Travelport\GDSQueue;

class SearchAccount
{

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var typeBranchId $BranchID
     */
    protected $BranchID = null;

    /**
     * @param string $ClientID
     * @param typeBranchId $BranchID
     */
    public function __construct($ClientID = null, $BranchID = null)
    {
      $this->ClientID = $ClientID;
      $this->BranchID = $BranchID;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \Santosdave\Travelport\GDSQueue\SearchAccount
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return typeBranchId
     */
    public function getBranchID()
    {
      return $this->BranchID;
    }

    /**
     * @param typeBranchId $BranchID
     * @return \Santosdave\Travelport\GDSQueue\SearchAccount
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
      return $this;
    }

}
