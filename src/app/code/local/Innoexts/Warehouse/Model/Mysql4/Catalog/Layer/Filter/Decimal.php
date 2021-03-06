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
 * Decimal layer filter resource
 * 
 * @category   Innoexts
 * @package    Innoexts_Warehouse
 * @author     Innoexts Team <developers@innoexts.com>
 */
class Innoexts_Warehouse_Model_Mysql4_Catalog_Layer_Filter_Decimal 
    extends Mage_Catalog_Model_Resource_Eav_Mysql4_Layer_Filter_Decimal 
{
    /**
     * Get warehouse helper
     * 
     * @return  Innoexts_Warehouse_Helper_Data
     */
    protected function getWarehouseHelper()
    {
        return Mage::helper('warehouse');
    }
    /**
     * Get version helper
     * 
     * @return Innoexts_Core_Helper_Version
     */
    protected function getVersionHelper()
    {
        return $this->getWarehouseHelper()->getVersionHelper();
    }
    /**
     * Apply attribute filter to product collection
     *
     * @param Mage_Catalog_Model_Layer_Filter_Decimal $filter
     * @param float $range
     * @param int $index
     * 
     * @return Mage_Catalog_Model_Resource_Layer_Filter_Decimal
     */
    public function applyFilterToCollection($filter, $range, $index)
    {
        $collection         = $filter->getLayer()->getProductCollection();
        $attribute          = $filter->getAttributeModel();
        $connection         = $this->_getReadAdapter();
        $tableAlias         = sprintf('%s_idx', $attribute->getAttributeCode());
        $conditions         = array(
            "{$tableAlias}.entity_id = e.entity_id",
            $connection->quoteInto("{$tableAlias}.attribute_id = ?", $attribute->getAttributeId()), 
            $connection->quoteInto("{$tableAlias}.store_id = ?", $collection->getStoreId()), 
            $connection->quoteInto("{$tableAlias}.stock_id = ?", $this->getWarehouseHelper()
                ->getProductHelper()
                ->getCollectionStockId($collection)), 
        );
        $select = $collection->getSelect();
        $select->join(array($tableAlias => $this->getMainTable()), implode(' AND ', $conditions), array());
        $select->where("{$tableAlias}.value >= ?", ($range * ($index - 1)));
        $select->where("{$tableAlias}.value < ?", ($range * $index));
        if ($this->getVersionHelper()->isGe1510() && !$this->getVersionHelper()->isGe1700()) {
            $select->group('e.entity_id');
        }
        return $this;
    }
    /**
     * Retrieve clean select with joined index table
     * Joined table has index
     *
     * @param Mage_Catalog_Model_Layer_Filter_Decimal $filter
     * 
     * @return Varien_Db_Select
     */
    protected function _getSelect($filter)
    {
        $collection         = $filter->getLayer()->getProductCollection();
        $select             = clone $collection->getSelect();
        $select->reset(Zend_Db_Select::COLUMNS);
        $select->reset(Zend_Db_Select::ORDER);
        $select->reset(Zend_Db_Select::LIMIT_COUNT);
        $select->reset(Zend_Db_Select::LIMIT_OFFSET);
        $connection         = $this->_getReadAdapter();
        $attributeId        = $filter->getAttributeModel()->getId();
        $storeId            = $collection->getStoreId();
        $conditions         = array(
            'e.entity_id = decimal_index.entity_id', 
            $connection->quoteInto('decimal_index.attribute_id = ?', $attributeId), 
            $connection->quoteInto('decimal_index.store_id = ?', $storeId), 
            $connection->quoteInto('decimal_index.stock_id = ?', $this->getWarehouseHelper()
                ->getProductHelper()
                ->getCollectionStockId($collection)), 
        );
        $select->join(array('decimal_index' => $this->getMainTable()), implode(' AND ', $conditions), array());
        return $select;
    }
}