<?php

namespace Santosdave\Travelport\Util;

class GroupedOptionInfo
{

    /**
     * @var GroupedOption $GroupedOption
     */
    protected $GroupedOption = null;

    /**
     * @param GroupedOption $GroupedOption
     */
    public function __construct($GroupedOption = null)
    {
      $this->GroupedOption = $GroupedOption;
    }

    /**
     * @return GroupedOption
     */
    public function getGroupedOption()
    {
      return $this->GroupedOption;
    }

    /**
     * @param GroupedOption $GroupedOption
     * @return \Santosdave\Travelport\Util\GroupedOptionInfo
     */
    public function setGroupedOption($GroupedOption)
    {
      $this->GroupedOption = $GroupedOption;
      return $this;
    }

}
