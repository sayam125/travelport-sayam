<?php

namespace Santosdave\Travelport\Air;

class VoidDocumentInfo
{

    /**
     * @var StringLength1to13 $DocumentNumber
     */
    protected $DocumentNumber = null;

    /**
     * @var anonymous456 $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @param StringLength1to13 $DocumentNumber
     * @param anonymous456 $DocumentType
     */
    public function __construct($DocumentNumber = null, $DocumentType = null)
    {
      $this->DocumentNumber = $DocumentNumber;
      $this->DocumentType = $DocumentType;
    }

    /**
     * @return StringLength1to13
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param StringLength1to13 $DocumentNumber
     * @return \Santosdave\Travelport\Air\VoidDocumentInfo
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return anonymous456
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param anonymous456 $DocumentType
     * @return \Santosdave\Travelport\Air\VoidDocumentInfo
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

}
