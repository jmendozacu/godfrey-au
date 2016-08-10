<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/AW-LICENSE-ENTERPRISE.txt
 * 
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento ENTERPRISE edition
 * aheadWorks does not guarantee correct work of this extension
 * on any other Magento edition except Magento ENTERPRISE edition.
 * aheadWorks does not provide extension support in case of
 * incorrect edition usage.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Mobile
 * @copyright  Copyright (c) 2010-2011 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/AW-LICENSE-ENTERPRISE.txt
 */
class AW_Mobile_Block_Checkout_Onepage_Success extends Mage_Checkout_Block_Onepage_Success
{
    protected $_order = null;

    public function getOrder()
    {
        if (!$this->_order){
            if ($this->getOrderId()){
                $this->_order = Mage::getModel('sales/order')->loadByIncrementId($this->getOrderId());
            }
        }
        return $this->_order;
    }

    public function getCanViewOrder()
    {
        return ($this->getOrder() && $this->getOrder()->getCustomerId());
    }
}