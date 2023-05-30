<?php

namespace Santosdave\Travelport\UProfile;

class TextRestriction
{

    /**
     * @var typeAction $Action
     */
    protected $Action = null;

    /**
     * @param typeAction $Action
     */
    public function __construct($Action = null)
    {
      $this->Action = $Action;
    }

    /**
     * @return typeAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param typeAction $Action
     * @return \Santosdave\Travelport\UProfile\TextRestriction
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

}
