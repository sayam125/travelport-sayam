<?php

namespace Santosdave\Travelport\Hotel;

class MarketingMessage
{

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string[] $Text
     * @return \Santosdave\Travelport\Hotel\MarketingMessage
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

}
