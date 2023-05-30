<?php

namespace Santosdave\Travelport\GDSQueue;

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
     * @return \Santosdave\Travelport\GDSQueue\MarketingMessage
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

}
