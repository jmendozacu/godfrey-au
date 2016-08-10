<?php
class Balance_Datafeed_Block_Adminhtml_Datafeed_Renderer_Status
extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row)
	{
		($row->getFeed_status()!=1) ?  $status= $this->__('Disabled') : $status= $this->__('Enabled');
		return $status;
	}

}
