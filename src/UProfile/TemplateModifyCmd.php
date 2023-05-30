<?php

namespace Santosdave\Travelport\UProfile;

class TemplateModifyCmd
{

    /**
     * @var TemplateInfoUpdate $TemplateInfoUpdate
     */
    protected $TemplateInfoUpdate = null;

    /**
     * @var FixedFieldUpdate $FixedFieldUpdate
     */
    protected $FixedFieldUpdate = null;

    /**
     * @var FixedGroupUpdate $FixedGroupUpdate
     */
    protected $FixedGroupUpdate = null;

    /**
     * @var typeEditableCustomField $CustomFieldAdd
     */
    protected $CustomFieldAdd = null;

    /**
     * @var typeEditableCustomField $CustomFieldUpdate
     */
    protected $CustomFieldUpdate = null;

    /**
     * @var typeCommonEditableGroup $CustomFieldGroupAdd
     */
    protected $CustomFieldGroupAdd = null;

    /**
     * @var typeCommonEditableGroup $CustomFieldGroupUpdate
     */
    protected $CustomFieldGroupUpdate = null;

    /**
     * @var EndpointAdd $EndpointAdd
     */
    protected $EndpointAdd = null;

    /**
     * @var typeEditableEndpoint $EndpointRemove
     */
    protected $EndpointRemove = null;

    /**
     * @var typeCustomFieldAndGroupDeleteRef $CustomFieldDelete
     */
    protected $CustomFieldDelete = null;

    /**
     * @var typeCustomFieldAndGroupDeleteRef $CustomFieldGroupDelete
     */
    protected $CustomFieldGroupDelete = null;

    /**
     * @param TemplateInfoUpdate $TemplateInfoUpdate
     * @param FixedFieldUpdate $FixedFieldUpdate
     * @param FixedGroupUpdate $FixedGroupUpdate
     * @param typeEditableCustomField $CustomFieldAdd
     * @param typeEditableCustomField $CustomFieldUpdate
     * @param typeCommonEditableGroup $CustomFieldGroupAdd
     * @param typeCommonEditableGroup $CustomFieldGroupUpdate
     * @param EndpointAdd $EndpointAdd
     * @param typeEditableEndpoint $EndpointRemove
     * @param typeCustomFieldAndGroupDeleteRef $CustomFieldDelete
     * @param typeCustomFieldAndGroupDeleteRef $CustomFieldGroupDelete
     */
    public function __construct($TemplateInfoUpdate = null, $FixedFieldUpdate = null, $FixedGroupUpdate = null, $CustomFieldAdd = null, $CustomFieldUpdate = null, $CustomFieldGroupAdd = null, $CustomFieldGroupUpdate = null, $EndpointAdd = null, $EndpointRemove = null, $CustomFieldDelete = null, $CustomFieldGroupDelete = null)
    {
      $this->TemplateInfoUpdate = $TemplateInfoUpdate;
      $this->FixedFieldUpdate = $FixedFieldUpdate;
      $this->FixedGroupUpdate = $FixedGroupUpdate;
      $this->CustomFieldAdd = $CustomFieldAdd;
      $this->CustomFieldUpdate = $CustomFieldUpdate;
      $this->CustomFieldGroupAdd = $CustomFieldGroupAdd;
      $this->CustomFieldGroupUpdate = $CustomFieldGroupUpdate;
      $this->EndpointAdd = $EndpointAdd;
      $this->EndpointRemove = $EndpointRemove;
      $this->CustomFieldDelete = $CustomFieldDelete;
      $this->CustomFieldGroupDelete = $CustomFieldGroupDelete;
    }

    /**
     * @return TemplateInfoUpdate
     */
    public function getTemplateInfoUpdate()
    {
      return $this->TemplateInfoUpdate;
    }

    /**
     * @param TemplateInfoUpdate $TemplateInfoUpdate
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setTemplateInfoUpdate($TemplateInfoUpdate)
    {
      $this->TemplateInfoUpdate = $TemplateInfoUpdate;
      return $this;
    }

    /**
     * @return FixedFieldUpdate
     */
    public function getFixedFieldUpdate()
    {
      return $this->FixedFieldUpdate;
    }

    /**
     * @param FixedFieldUpdate $FixedFieldUpdate
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setFixedFieldUpdate($FixedFieldUpdate)
    {
      $this->FixedFieldUpdate = $FixedFieldUpdate;
      return $this;
    }

    /**
     * @return FixedGroupUpdate
     */
    public function getFixedGroupUpdate()
    {
      return $this->FixedGroupUpdate;
    }

    /**
     * @param FixedGroupUpdate $FixedGroupUpdate
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setFixedGroupUpdate($FixedGroupUpdate)
    {
      $this->FixedGroupUpdate = $FixedGroupUpdate;
      return $this;
    }

    /**
     * @return typeEditableCustomField
     */
    public function getCustomFieldAdd()
    {
      return $this->CustomFieldAdd;
    }

    /**
     * @param typeEditableCustomField $CustomFieldAdd
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldAdd($CustomFieldAdd)
    {
      $this->CustomFieldAdd = $CustomFieldAdd;
      return $this;
    }

    /**
     * @return typeEditableCustomField
     */
    public function getCustomFieldUpdate()
    {
      return $this->CustomFieldUpdate;
    }

    /**
     * @param typeEditableCustomField $CustomFieldUpdate
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldUpdate($CustomFieldUpdate)
    {
      $this->CustomFieldUpdate = $CustomFieldUpdate;
      return $this;
    }

    /**
     * @return typeCommonEditableGroup
     */
    public function getCustomFieldGroupAdd()
    {
      return $this->CustomFieldGroupAdd;
    }

    /**
     * @param typeCommonEditableGroup $CustomFieldGroupAdd
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldGroupAdd($CustomFieldGroupAdd)
    {
      $this->CustomFieldGroupAdd = $CustomFieldGroupAdd;
      return $this;
    }

    /**
     * @return typeCommonEditableGroup
     */
    public function getCustomFieldGroupUpdate()
    {
      return $this->CustomFieldGroupUpdate;
    }

    /**
     * @param typeCommonEditableGroup $CustomFieldGroupUpdate
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldGroupUpdate($CustomFieldGroupUpdate)
    {
      $this->CustomFieldGroupUpdate = $CustomFieldGroupUpdate;
      return $this;
    }

    /**
     * @return EndpointAdd
     */
    public function getEndpointAdd()
    {
      return $this->EndpointAdd;
    }

    /**
     * @param EndpointAdd $EndpointAdd
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setEndpointAdd($EndpointAdd)
    {
      $this->EndpointAdd = $EndpointAdd;
      return $this;
    }

    /**
     * @return typeEditableEndpoint
     */
    public function getEndpointRemove()
    {
      return $this->EndpointRemove;
    }

    /**
     * @param typeEditableEndpoint $EndpointRemove
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setEndpointRemove($EndpointRemove)
    {
      $this->EndpointRemove = $EndpointRemove;
      return $this;
    }

    /**
     * @return typeCustomFieldAndGroupDeleteRef
     */
    public function getCustomFieldDelete()
    {
      return $this->CustomFieldDelete;
    }

    /**
     * @param typeCustomFieldAndGroupDeleteRef $CustomFieldDelete
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldDelete($CustomFieldDelete)
    {
      $this->CustomFieldDelete = $CustomFieldDelete;
      return $this;
    }

    /**
     * @return typeCustomFieldAndGroupDeleteRef
     */
    public function getCustomFieldGroupDelete()
    {
      return $this->CustomFieldGroupDelete;
    }

    /**
     * @param typeCustomFieldAndGroupDeleteRef $CustomFieldGroupDelete
     * @return \Santosdave\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldGroupDelete($CustomFieldGroupDelete)
    {
      $this->CustomFieldGroupDelete = $CustomFieldGroupDelete;
      return $this;
    }

}
