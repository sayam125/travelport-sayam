<?php

namespace Santosdave\Travelport\UProfile;

class DeleteOverrideDefinition
{

    /**
     * @var typeID $TemplateFieldID
     */
    protected $TemplateFieldID = null;

    /**
     * @var typeCustomFieldOrGroupType $TemplateFieldType
     */
    protected $TemplateFieldType = null;

    /**
     * @param typeID $TemplateFieldID
     * @param typeCustomFieldOrGroupType $TemplateFieldType
     */
    public function __construct($TemplateFieldID = null, $TemplateFieldType = null)
    {
      $this->TemplateFieldID = $TemplateFieldID;
      $this->TemplateFieldType = $TemplateFieldType;
    }

    /**
     * @return typeID
     */
    public function getTemplateFieldID()
    {
      return $this->TemplateFieldID;
    }

    /**
     * @param typeID $TemplateFieldID
     * @return \Santosdave\Travelport\UProfile\DeleteOverrideDefinition
     */
    public function setTemplateFieldID($TemplateFieldID)
    {
      $this->TemplateFieldID = $TemplateFieldID;
      return $this;
    }

    /**
     * @return typeCustomFieldOrGroupType
     */
    public function getTemplateFieldType()
    {
      return $this->TemplateFieldType;
    }

    /**
     * @param typeCustomFieldOrGroupType $TemplateFieldType
     * @return \Santosdave\Travelport\UProfile\DeleteOverrideDefinition
     */
    public function setTemplateFieldType($TemplateFieldType)
    {
      $this->TemplateFieldType = $TemplateFieldType;
      return $this;
    }

}
