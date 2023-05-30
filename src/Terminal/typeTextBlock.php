<?php

namespace Santosdave\Travelport\Terminal;

class typeTextBlock
{

    /**
     * @var Text[] $Text
     */
    protected $Text = null;

    /**
     * @param Text[] $Text
     */
    public function __construct(array $Text = null)
    {
      $this->Text = $Text;
    }

    /**
     * @return Text[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param Text[] $Text
     * @return \Santosdave\Travelport\Terminal\typeTextBlock
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
