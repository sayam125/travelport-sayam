<?php

namespace Santosdave\Travelport\GDSQueue;

class RefundRemark
{

    /**
     * @var string $RemarkData
     */
    protected $RemarkData = null;

    /**
     * @param string $RemarkData
     */
    public function __construct($RemarkData = null)
    {
      $this->RemarkData = $RemarkData;
    }

    /**
     * @return string
     */
    public function getRemarkData()
    {
      return $this->RemarkData;
    }

    /**
     * @param string $RemarkData
     * @return \Santosdave\Travelport\GDSQueue\RefundRemark
     */
    public function setRemarkData($RemarkData)
    {
      $this->RemarkData = $RemarkData;
      return $this;
    }

}
