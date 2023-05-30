<?php

namespace Santosdave\Travelport\Rail;

class MetaData
{

    /**
     * @var anonymous185 $Key
     */
    protected $Key = null;

    /**
     * @var anonymous186 $Value
     */
    protected $Value = null;

    /**
     * @param anonymous185 $Key
     * @param anonymous186 $Value
     */
    public function __construct($Key = null, $Value = null)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

    /**
     * @return anonymous185
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param anonymous185 $Key
     * @return \Santosdave\Travelport\Rail\MetaData
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous186
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous186 $Value
     * @return \Santosdave\Travelport\Rail\MetaData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
