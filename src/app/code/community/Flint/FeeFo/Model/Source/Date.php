<?php
/**
 * Flint Technology Ltd
 *
 * This module was developed by Flint Technology Ltd (http://www.flinttechnology.co.uk).
 * For support or questions, contact us via http://www.flinttechnology.co.uk/store/contacts
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA bundled with this package in the file LICENSE.txt.
 * It is also available online at http://www.flinttechnology.co.uk/store/module-license-1.0
 *
 * @package     flint_feefo-ee-1.8-1.2.1.zip
 * @registrant  Siobhan Delatai
 * @license     E2C53A03-4603-414C-ABF5-EAD8A60F290E
 * @eula        Flint Module Single Installation License (http://www.flinttechnology.co.uk/store/module-license-1.0
 * @copyright   Copyright (c) 2012 Flint Technology Ltd (http://www.flinttechnology.co.uk)
 */

?>
<?php
class Flint_FeeFo_Model_Source_Date
{
    protected $_options;

    public function toOptionArray()
    {
        if (!$this->_options) {    
             $statuses = Mage::getModel('sales/order_config')->getStatuses();
            
            foreach ( $statuses as $k => $v ) {
                $options_default[] = array('value' => $k, 'label' => Mage::helper('flint_feefo')->__($v));
            }
	    $this->_options = $options_default;
        }
        
        return $this->_options;
    }
    
    
}
