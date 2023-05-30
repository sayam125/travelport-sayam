<?php

namespace Santosdave\Travelport\UProfile;

class FixedField
{

    /**
     * @var FixedFieldGroupRef $FixedFieldGroupRef
     */
    protected $FixedFieldGroupRef = null;

    /**
     * @var ActionRef $ActionRef
     */
    protected $ActionRef = null;

    /**
     * @var typeFieldID $ID
     */
    protected $ID = null;

    /**
     * @var boolean $ReadOnly
     */
    protected $ReadOnly = null;

    /**
     * @var boolean $Overriden
     */
    protected $Overriden = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var boolean $Hide
     */
    protected $Hide = null;

    /**
     * @var boolean $SearchOption
     */
    protected $SearchOption = null;

    /**
     * @var int $SearchOptionDisplayOrder
     */
    protected $SearchOptionDisplayOrder = null;

    /**
     * @var int $MinOccursOverride
     */
    protected $MinOccursOverride = null;

    /**
     * @var int $MaxOccursOverride
     */
    protected $MaxOccursOverride = null;

    /**
     * @var int $MaxOccurs
     */
    protected $MaxOccurs = null;

    /**
     * @var int $MinOccurs
     */
    protected $MinOccurs = null;

    /**
     * @var typeFieldName $Name
     */
    protected $Name = null;

    /**
     * @var typeFixedFieldDataFormat $DataType
     */
    protected $DataType = null;

    /**
     * @var anonymous879 $Component
     */
    protected $Component = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var boolean $Encrypted
     */
    protected $Encrypted = null;

    /**
     * @var typeMasked $Masked
     */
    protected $Masked = null;

    /**
     * @var boolean $Searchable
     */
    protected $Searchable = null;

    /**
     * @var boolean $Inheritable
     */
    protected $Inheritable = null;

    /**
     * @param FixedFieldGroupRef $FixedFieldGroupRef
     * @param ActionRef $ActionRef
     * @param typeFieldID $ID
     * @param boolean $ReadOnly
     * @param boolean $Overriden
     * @param string $Label
     * @param int $DisplayOrder
     * @param boolean $Hide
     * @param boolean $SearchOption
     * @param int $SearchOptionDisplayOrder
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param int $MaxOccurs
     * @param int $MinOccurs
     * @param typeFieldName $Name
     * @param typeFixedFieldDataFormat $DataType
     * @param anonymous879 $Component
     * @param StringLength1to255 $Description
     * @param boolean $Encrypted
     * @param typeMasked $Masked
     * @param boolean $Searchable
     * @param boolean $Inheritable
     */
    public function __construct($FixedFieldGroupRef = null, $ActionRef = null, $ID = null, $ReadOnly = null, $Overriden = null, $Label = null, $DisplayOrder = null, $Hide = null, $SearchOption = null, $SearchOptionDisplayOrder = null, $MinOccursOverride = null, $MaxOccursOverride = null, $MaxOccurs = null, $MinOccurs = null, $Name = null, $DataType = null, $Component = null, $Description = null, $Encrypted = null, $Masked = null, $Searchable = null, $Inheritable = null)
    {
      $this->FixedFieldGroupRef = $FixedFieldGroupRef;
      $this->ActionRef = $ActionRef;
      $this->ID = $ID;
      $this->ReadOnly = $ReadOnly;
      $this->Overriden = $Overriden;
      $this->Label = $Label;
      $this->DisplayOrder = $DisplayOrder;
      $this->Hide = $Hide;
      $this->SearchOption = $SearchOption;
      $this->SearchOptionDisplayOrder = $SearchOptionDisplayOrder;
      $this->MinOccursOverride = $MinOccursOverride;
      $this->MaxOccursOverride = $MaxOccursOverride;
      $this->MaxOccurs = $MaxOccurs;
      $this->MinOccurs = $MinOccurs;
      $this->Name = $Name;
      $this->DataType = $DataType;
      $this->Component = $Component;
      $this->Description = $Description;
      $this->Encrypted = $Encrypted;
      $this->Masked = $Masked;
      $this->Searchable = $Searchable;
      $this->Inheritable = $Inheritable;
    }

    /**
     * @return FixedFieldGroupRef
     */
    public function getFixedFieldGroupRef()
    {
      return $this->FixedFieldGroupRef;
    }

    /**
     * @param FixedFieldGroupRef $FixedFieldGroupRef
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setFixedFieldGroupRef($FixedFieldGroupRef)
    {
      $this->FixedFieldGroupRef = $FixedFieldGroupRef;
      return $this;
    }

    /**
     * @return ActionRef
     */
    public function getActionRef()
    {
      return $this->ActionRef;
    }

    /**
     * @param ActionRef $ActionRef
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setActionRef($ActionRef)
    {
      $this->ActionRef = $ActionRef;
      return $this;
    }

    /**
     * @return typeFieldID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeFieldID $ID
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReadOnly()
    {
      return $this->ReadOnly;
    }

    /**
     * @param boolean $ReadOnly
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setReadOnly($ReadOnly)
    {
      $this->ReadOnly = $ReadOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverriden()
    {
      return $this->Overriden;
    }

    /**
     * @param boolean $Overriden
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setOverriden($Overriden)
    {
      $this->Overriden = $Overriden;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
      return $this->DisplayOrder;
    }

    /**
     * @param int $DisplayOrder
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHide()
    {
      return $this->Hide;
    }

    /**
     * @param boolean $Hide
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setHide($Hide)
    {
      $this->Hide = $Hide;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchOption()
    {
      return $this->SearchOption;
    }

    /**
     * @param boolean $SearchOption
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setSearchOption($SearchOption)
    {
      $this->SearchOption = $SearchOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchOptionDisplayOrder()
    {
      return $this->SearchOptionDisplayOrder;
    }

    /**
     * @param int $SearchOptionDisplayOrder
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setSearchOptionDisplayOrder($SearchOptionDisplayOrder)
    {
      $this->SearchOptionDisplayOrder = $SearchOptionDisplayOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccursOverride()
    {
      return $this->MinOccursOverride;
    }

    /**
     * @param int $MinOccursOverride
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setMinOccursOverride($MinOccursOverride)
    {
      $this->MinOccursOverride = $MinOccursOverride;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccursOverride()
    {
      return $this->MaxOccursOverride;
    }

    /**
     * @param int $MaxOccursOverride
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setMaxOccursOverride($MaxOccursOverride)
    {
      $this->MaxOccursOverride = $MaxOccursOverride;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccurs()
    {
      return $this->MaxOccurs;
    }

    /**
     * @param int $MaxOccurs
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccurs()
    {
      return $this->MinOccurs;
    }

    /**
     * @param int $MinOccurs
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setMinOccurs($MinOccurs)
    {
      $this->MinOccurs = $MinOccurs;
      return $this;
    }

    /**
     * @return typeFieldName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeFieldName $Name
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeFixedFieldDataFormat
     */
    public function getDataType()
    {
      return $this->DataType;
    }

    /**
     * @param typeFixedFieldDataFormat $DataType
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
      return $this;
    }

    /**
     * @return anonymous879
     */
    public function getComponent()
    {
      return $this->Component;
    }

    /**
     * @param anonymous879 $Component
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setComponent($Component)
    {
      $this->Component = $Component;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEncrypted()
    {
      return $this->Encrypted;
    }

    /**
     * @param boolean $Encrypted
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setEncrypted($Encrypted)
    {
      $this->Encrypted = $Encrypted;
      return $this;
    }

    /**
     * @return typeMasked
     */
    public function getMasked()
    {
      return $this->Masked;
    }

    /**
     * @param typeMasked $Masked
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setMasked($Masked)
    {
      $this->Masked = $Masked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchable()
    {
      return $this->Searchable;
    }

    /**
     * @param boolean $Searchable
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setSearchable($Searchable)
    {
      $this->Searchable = $Searchable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritable()
    {
      return $this->Inheritable;
    }

    /**
     * @param boolean $Inheritable
     * @return \Santosdave\Travelport\UProfile\FixedField
     */
    public function setInheritable($Inheritable)
    {
      $this->Inheritable = $Inheritable;
      return $this;
    }

}
