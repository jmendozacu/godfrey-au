<?php
/**
 * Innoexts
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the InnoExts Commercial License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://innoexts.com/commercial-license-agreement
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@innoexts.com so we can send you a copy immediately.
 * 
 * @category    Innoexts
 * @package     Innoexts_Warehouse
 * @copyright   Copyright (c) 2014 Innoexts (http://www.innoexts.com)
 * @license     http://innoexts.com/commercial-license-agreement  InnoExts Commercial License
 */

/**
 * Warehouse sales credit memos tab
 * 
 * @category   Innoexts
 * @package    Innoexts_Warehouse
 * @author     Innoexts Team <developers@innoexts.com>
 */
class Innoexts_Warehouse_Block_Adminhtml_Warehouse_Edit_Tab_Sales_Creditmemos 
    extends Innoexts_Core_Block_Adminhtml_Widget_Grid 
{
    /**
     * Retrieve warehouse helper
     *
     * @return Innoexts_Warehouse_Helper_Data
     */
    protected function getWarehouseHelper()
    {
        return Mage::helper('warehouse');
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('salesCreditmemosGrid');
        $this->setDefaultSort('created_at');
        $this->setDefaultDir('DESC');
        $this->setUseAjax(true);
    }
    /**
     * Retrieve warehouse model
     *
     * @return Innoexts_Warehouse_Model_Warehouse
     */
    protected function getModel()
    {
        return Mage::registry('warehouse');
    }
    /**
     * Check wether action is allowed or not
     * 
     * @param string $action
     * 
     * @return boolean
     */
    protected function isActionAllowed($action)
    {
        return $this->getAdminSession()->isAllowed('sales/order/creditmemo');
    }
    /**
     * Retrieve collection class
     * 
     * @return string
     */
    protected function _getCollectionClass()
    {
        return 'sales/order_creditmemo_grid_collection';
    }
    /**
     * Prepare collection object
     *
     * @return Varien_Data_Collection
     */
    protected function __prepareCollection()
    {
        $model = $this->getModel();
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $select = $collection->getSelect();
        $select->joinLeft(
            array('creditmemo_stock' => $collection->getTable('warehouse/creditmemo_grid_warehouse')), 
            '(main_table.entity_id = creditmemo_stock.entity_id)', 
            array('stock_id' => 'creditmemo_stock.stock_id')
        );
        if ($model->getId()) {
            $select->where('creditmemo_stock.stock_id = ?', $model->getStockId());
        } else {
            $select->where('creditmemo_stock.stock_id = -1');
        }
        return $collection;
    }
    /**
     * Add columns to grid
     *
     * @return Innoexts_Warehouse_Block_Adminhtml_Warehouse_Edit_Tab_Sales_Creditmemos
     */
    protected function _prepareColumns()
    {
        $helper = $this->getWarehouseHelper();
        $this->addColumn('increment_id', array(
            'header'    => $helper->__('Credit Memo #'), 
            'index'     => 'increment_id', 
            'type'      => 'text', 
        ));
        $this->addColumn('created_at', array(
            'header'    => $helper->__('Created At'), 
            'index'     => 'created_at', 
            'type'      => 'datetime', 
        ));
        $this->addColumn('order_increment_id', array(
            'header'    => $helper->__('Order #'), 
            'index'     => 'order_increment_id', 
            'type'      => 'text', 
        ));
        $this->addColumn('order_created_at', array(
            'header'    => $helper->__('Order Date'), 
            'index'     => 'order_created_at', 
            'type'      => 'datetime', 
        ));
        $this->addColumn('billing_name', array(
            'header'    => $helper->__('Bill to Name'), 
            'index'     => 'billing_name', 
        ));
        $this->addColumn('state', array(
            'header'    => $helper->__('Status'), 
            'index'     => 'state', 
            'type'      => 'options', 
            'options'   => Mage::getModel('sales/order_creditmemo')->getStates(), 
        ));
        $this->addColumn('grand_total', array(
            'header'    => $helper->__('Refunded'), 
            'index'     => 'grand_total', 
            'type'      => 'currency', 
            'align'     => 'right', 
            'currency'  => 'order_currency_code', 
        ));
        $this->addColumn('action', array(
            'header'    => $helper->__('Action'), 
            'width'     => '50px', 
            'type'      => 'action', 
            'getter'    => 'getId', 
            'actions'   => array(
                array(
                    'caption' => $helper->__('View'), 
                    'url'     => array('base'=>'adminhtml/sales_creditmemo/view'), 
                    'field'   => 'creditmemo_id', 
                ), 
            ),
            'filter'    => false,
            'sortable'  => false,
            'is_system' => true, 
        ));
        return parent::_prepareColumns();
    }
    /**
     * Retrieve grid URL
     *
     * @return string
     */
    public function getGridUrl()
    {
        return $this->getData('grid_url') ? 
            $this->getData('grid_url') : 
            $this->getUrl('*/*/salesCreditmemosGrid', array('_current' => true));
    }
    /**
     * Get row URL
     * 
     * @return string
     */
    public function getRowUrl($row)
    {
        if (!$this->isViewAllowed()) {
            return false;
        }
        return $this->getUrl('adminhtml/sales_creditmemo/view', array('creditmemo_id' => $row->getId()));
    }
}