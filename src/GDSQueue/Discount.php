<?php

namespace Santosdave\Travelport\GDSQueue;

class Discount
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var StringLength1to13 $Description
     */
    protected $Description = null;

    /**
     * @param typeMoney $Amount
     * @param StringLength1to13 $Description
     */
    public function __construct($Amount = null, $Description = null)
    {
      $this->Amount = $Amount;
      $this->Description = $Description;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \Santosdave\Travelport\GDSQueue\Discount
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to13 $Description
     * @return \Santosdave\Travelport\GDSQueue\Discount
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
