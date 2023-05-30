<?php

namespace Santosdave\Travelport\Terminal;

class AgencyInfo
{

    /**
     * @var AgentAction $AgentAction
     */
    protected $AgentAction = null;

    /**
     * @param AgentAction $AgentAction
     */
    public function __construct($AgentAction = null)
    {
      $this->AgentAction = $AgentAction;
    }

    /**
     * @return AgentAction
     */
    public function getAgentAction()
    {
      return $this->AgentAction;
    }

    /**
     * @param AgentAction $AgentAction
     * @return \Santosdave\Travelport\Terminal\AgencyInfo
     */
    public function setAgentAction($AgentAction)
    {
      $this->AgentAction = $AgentAction;
      return $this;
    }

}
