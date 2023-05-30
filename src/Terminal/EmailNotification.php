<?php

namespace Santosdave\Travelport\Terminal;

class EmailNotification
{

    /**
     * @var typeRef[] $EmailRef
     */
    protected $EmailRef = null;

    /**
     * @var anonymous476 $Recipients
     */
    protected $Recipients = null;

    /**
     * @param anonymous476 $Recipients
     */
    public function __construct($Recipients = null)
    {
      $this->Recipients = $Recipients;
    }

    /**
     * @return typeRef[]
     */
    public function getEmailRef()
    {
      return $this->EmailRef;
    }

    /**
     * @param typeRef[] $EmailRef
     * @return \Santosdave\Travelport\Terminal\EmailNotification
     */
    public function setEmailRef(array $EmailRef = null)
    {
      $this->EmailRef = $EmailRef;
      return $this;
    }

    /**
     * @return anonymous476
     */
    public function getRecipients()
    {
      return $this->Recipients;
    }

    /**
     * @param anonymous476 $Recipients
     * @return \Santosdave\Travelport\Terminal\EmailNotification
     */
    public function setRecipients($Recipients)
    {
      $this->Recipients = $Recipients;
      return $this;
    }

}
