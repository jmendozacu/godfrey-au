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
 * Warehouse sales orders tab
 * 
 * @category   Innoexts
 * @package    Innoexts_Warehouse
 * @author     Innoexts Team <developers@innoexts.com>
 */
class Innoexts_Warehouse_Block_Adminhtml_Warehouse_Edit_Tab_Sales_Orders 
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
        $this->setId('salesOrdersGrid');
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
     * @return boolean
     */
    protected function isActionAllowed($action)
    {
        return $this->getAdminSession()->isAllowed('sales/order/actions/'.$action);
    }
    /**
     * Retrieve collection class
     * 
     * @return string
     */
    protected function _getCollectionClass()
    {
        return 'sales/order_grid_collection';
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
            array('order_stock' => $collection->getTable('warehouse/order_grid_warehouse')), 
            '(main_table.entity_id = order_stock.entity_id)', 
            array('stock_id' => 'order_stock.stock_id')
        );
        if ($model->getId()) {
            $select->where('order_stock.stock_id = ?', $model->getStockId());
        } else {
            $select->where('order_stock.stock_id = -1');
        }
        return $collection;
    }
    /**
     * Add columns to grid
     *
     * @return Innoexts_Warehouse_Block_Adminhtml_Warehouse_Edit_Tab_Sales_Orders
     */
    protected function _prepareColumns()
    {
        $helper = $this->getWarehouseHelper();
        $this->addColumn('real_order_id', array(
            'header'        => $helper->__('Order #'), 
            'width'         => '80px', 
            'type'          => 'text', 
            'index'         => 'increment_id', 
        ));
        if (!Mage::app()->isSingleStoreMode()) {
            $this->addColumn('store_id', array(
                'header'            => $helper->__('Purchased From (Store)'), 
                'index'             => 'store_id', 
                'type'              => 'store', 
                'store_view'        => true, 
                'display_deleted'   => true, 
            ));
        }
        $this->addColumn('created_at', array(
            'header'        => $helper->__('Purchased On'), 
            'index'         => 'created_at', 
            'type'          => 'datetime', 
            'width'         => '100px', 
        ));
        $this->addColumn('billing_name', array(
            'header'        => $helper->__('Bill to Name'), 
            'index'         => 'billing_name', 
        ));
        $this->addColumn('shipping_name', array(
            'header'        => $helper->__('Ship to Name'), 
            'index'         => 'shipping_name', 
        ));
        $this->addColumn('base_grand_total', array(
            'header'        => $helper->__('G.T. (Base)'), 
            'index'         => 'base_grand_total', 
            'type'          => 'currency', 
            'currency'      => 'base_currency_code', 
        ));
        $this->addColumn('grand_total', array(
            'header'        => $helper->__('G.T. (Purchased)'), 
            'index'         => 'grand_total', 
            'type'          => 'currency', 
            'currency'      => 'order_currency_code', 
        ));
        $this->addColumn('status', array(
            'header'            => $helper->__('Status'), 
            'index'             => 'status', 
            'type'              => 'options', 
            'width'             => '70px', 
            'options'           => Mage::getSingleton('sales/order_config')->getStatuses(), 
        ));
        if ($this->isViewAllowed()) {
            $this->addColumn('action', array(
                'header'        => $helper->__('Action'), 
                'width'         => '50px', 
                'type'          => 'action', 
                'getter'        => 'getId', 
                'actions'       => array(
                    array(
                        'caption'   => $helper->__('View'), 
                        'url'       => array('base'=>'adminhtml/sales_order/view'), 
                        'field'     => 'order_id', 
                    )
                ), 
                'filter'        => false, 
                'sortable'      => false, 
                'is_system'     => true, 
            ));
        }
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
            $this->getUrl('*/*/salesOrdersGrid', array('_current' => true));
    }
    /**
     * Get row URL
     * 
     * @return string
     */
    public function getRowUrl($row)
    {
        if ($this->isViewAllowed()) {
            return $this->getUrl('adminhtml/sales_order/view', array('order_id' => $row->getId()));
        }
        return false;
    }
}