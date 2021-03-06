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
 * Configurable products price indexer resource
 * 
 * @category   Innoexts
 * @package    Innoexts_Warehouse
 * @author     Innoexts Team <developers@innoexts.com>
 */
class Innoexts_Warehouse_Model_Mysql4_Catalog_Product_Indexer_Price_Configurable 
    extends Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Indexer_Price_Configurable 
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
     * Get price indexer helper
     * 
     * @return Innoexts_Warehouse_Helper_Catalog_Product_Price_Indexer
     */
    protected function getProductPriceIndexerHelper()
    {
        return $this->getWarehouseHelper()->getProductPriceIndexerHelper();
    }
    /**
     * Get version helper
     * 
     * @return Innoexts_Core_Helper_Version
     */
    protected function getVersionHelper()
    {
        return $this->getProductPriceIndexerHelper()->getVersionHelper();
    }
    /**
     * Prepare products default final price in temporary index table
     *
     * @param int|array $entityIds  the entity ids limitation
     * @return Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Indexer_Price_Default
     */
    protected function _prepareFinalPriceData($entityIds = null)
    {
        $helper             = $this->getWarehouseHelper();
        $indexerHelper      = $this->getProductPriceIndexerHelper();
        $isMultipleMode     = $helper->isMultipleMode();
        $write              = $this->_getWriteAdapter();
        $this->_prepareDefaultFinalPriceTable();
        $select             = $indexerHelper->getFinalPriceSelect($write);
        $select->where('e.type_id=?', $this->getTypeId());
        
        $statusCond     = $write->quoteInto('=?', Mage_Catalog_Model_Product_Status::STATUS_ENABLED);
        $this->_addAttributeToSelect($select, 'status', 'e.entity_id', 'cs.store_id', $statusCond, true);
        
        if ($this->getVersionHelper()->isGe1600()) {
            if (Mage::helper('core')->isModuleEnabled('Mage_Tax')) {
                $taxClassId = $this->_addAttributeToSelect($select, 'tax_class_id', 'e.entity_id', 'cs.store_id');
            } else {
                $taxClassId = new Zend_Db_Expr('0');
            }
        } else {
            $taxClassId = $this->_addAttributeToSelect($select, 'tax_class_id', 'e.entity_id', 'cs.store_id');
        }
        $select->columns(array('tax_class_id' => $taxClassId));
       
        $indexerHelper->addStockJoin($select);
        
        $indexerHelper->addTierPriceJoin($select, 'tp', $this->getTable('catalog/product_index_tier_price'));
        
        $price          = $this->_addAttributeToSelect($select, 'price', 'e.entity_id', 'cs.store_id');
        $indexerHelper->addBatchPriceJoin($select, 'bp', $indexerHelper->getBatchPriceIndexTable());
        $price          = new Zend_Db_Expr("IF (bp.price IS NOT NULL, bp.price, {$price})");
        if ($isMultipleMode) {
            $minPrice       = new Zend_Db_Expr("IF (bp.min_price IS NOT NULL, bp.min_price, {$price})");
            $maxPrice       = new Zend_Db_Expr("IF (bp.max_price IS NOT NULL, bp.max_price, {$price})");
        }
        $specialFrom    = $this->_addAttributeToSelect($select, 'special_from_date', 'e.entity_id', 'cs.store_id');
        $specialTo      = $this->_addAttributeToSelect($select, 'special_to_date', 'e.entity_id', 'cs.store_id');
        $specialPrice   = $this->_addAttributeToSelect($select, 'special_price', 'e.entity_id', 'cs.store_id');
        
        $indexerHelper->addBatchPriceJoin($select, 'bsp', $indexerHelper->getBatchSpecialPriceIndexTable());
        $specialPrice   = new Zend_Db_Expr("IF (bsp.price IS NOT NULL, bsp.price, {$price})");
        if ($isMultipleMode) {
            $specialMinPrice    = new Zend_Db_Expr("IF (bsp.min_price IS NOT NULL, bsp.min_price, {$price})");
            $specialMaxPrice    = new Zend_Db_Expr("IF (bsp.max_price IS NOT NULL, bsp.max_price, {$price})");
        }
        $finalPrice     = $indexerHelper->getFinalPriceExpr($write, $price, $specialPrice, $specialFrom, $specialTo);
        if ($isMultipleMode) {
            $finalMinPrice       = $indexerHelper->getFinalPriceExpr($write, $minPrice, $specialMinPrice, $specialFrom, $specialTo);
            $finalMaxPrice       = $indexerHelper->getFinalPriceExpr($write, $maxPrice, $specialMaxPrice, $specialFrom, $specialTo);
        } else {
            $finalMinPrice       = $finalPrice;
            $finalMaxPrice       = $finalPrice;
        }
        $select->columns(array(
            'orig_price'    => $price, 
            'price'         => $finalPrice, 
            'min_price'     => $finalMinPrice, 
            'max_price'     => $finalMaxPrice, 
            'tier_price'    => new Zend_Db_Expr('tp.min_price'), 
            'base_tier'     => new Zend_Db_Expr('tp.min_price'), 
        ));
        if ($this->getVersionHelper()->isGe1700()) {
            $select->columns(array(
                'group_price'      => new Zend_Db_Expr('gp.price'), 
                'base_group_price' => new Zend_Db_Expr('gp.price'), 
            ));
        }
        $select->columns(array(
            'stock_id'      => new Zend_Db_Expr('cis.stock_id'), 
        ));
        if (!is_null($entityIds)) {
            $select->where('e.entity_id IN(?)', $entityIds);
        }
        $eventData = array(
            'select'        => $select, 
            'entity_field'  => new Zend_Db_Expr('e.entity_id'), 
            'website_field' => new Zend_Db_Expr('cw.website_id'), 
            'store_field'   => new Zend_Db_Expr('cs.store_id'), 
            'stock_field'   => new Zend_Db_Expr('cis.stock_id'), 
        );
        Mage::dispatchEvent('prepare_catalog_product_index_select', $eventData);
        $query = $select->insertFromSelect($this->_getDefaultFinalPriceTable());
        $write->query($query);
        $select = $write->select()->join(array('wd' => $this->_getWebsiteDateTable()), 'i.website_id = wd.website_id', array());
        
        $parameters = array(
            'index_table'       => array('i' => $this->_getDefaultFinalPriceTable()), 
            'select'            => $select, 
            'entity_id'         => 'i.entity_id', 
            'customer_group_id' => 'i.customer_group_id', 
            'website_id'        => 'i.website_id', 
            'stock_id'          => 'i.stock_id', 
            'update_fields'     => array('price', 'min_price', 'max_price'), 
        );
        if ($this->getVersionHelper()->isGe1600()) {
            $parameters['website_date'] = 'wd.website_date';
        } else {
            $parameters['website_date'] = 'wd.date';
        }
        Mage::dispatchEvent('prepare_catalog_product_price_index_table', $parameters);
        return $this;
    }
    /**
     * Apply custom option minimal and maximal price to temporary final price index table
     *
     * @return Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Indexer_Price_Default
     */
    protected function _applyCustomOption()
    {
        $indexerHelper      = $this->getProductPriceIndexerHelper();
        $write              = $this->_getWriteAdapter();
        $coaTable           = $this->_getCustomOptionAggregateTable();
        $copTable           = $this->_getCustomOptionPriceTable();
        $finalPriceTable    = $this->_getDefaultFinalPriceTable();
        $this->_prepareCustomOptionAggregateTable();
        $this->_prepareCustomOptionPriceTable();
        
        $select             = $indexerHelper->getOptionTypePriceSelect($write, $finalPriceTable);
        $query              = $select->insertFromSelect($coaTable);
        $write->query($query);
        
        $select             = $indexerHelper->getOptionPriceSelect($write, $finalPriceTable);
        $query              = $select->insertFromSelect($coaTable);
        $write->query($query);
        
        $select             = $indexerHelper->getAggregatedOptionPriceSelect($write, $coaTable);
        $query              = $select->insertFromSelect($copTable);
        $write->query($query);
        
        
        $table              = array('i' => $finalPriceTable);
        $select             = $indexerHelper->getOptionFinalPriceSelect($write, $copTable);
        $query = $select->crossUpdateFromSelect($table);
        $write->query($query);
        
        if ($this->getVersionHelper()->isGe1620()) {
            $write->delete($coaTable);
            $write->delete($copTable);
        } else {
            if ($this->useIdxTable()) {
                $write->truncate($coaTable);
                $write->truncate($copTable);
            } else {
                $write->delete($coaTable);
                $write->delete($copTable);
            }
        }
        
        return $this;
    }
    /**
     * Calculate minimal and maximal prices for configurable product options
     * and apply it to final price
     *
     * @return Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Indexer_Price_Configurable
     */
    protected function _applyConfigurableOption()
    {
        $indexerHelper      = $this->getProductPriceIndexerHelper();
        $write              = $this->_getWriteAdapter();
        $coaTable           = $this->_getConfigurableOptionAggregateTable();
        $copTable           = $this->_getConfigurableOptionPriceTable();
        $finalPriceTable    = $this->_getDefaultFinalPriceTable();
        $this->_prepareConfigurableOptionAggregateTable();
        $this->_prepareConfigurableOptionPriceTable();
        
        $select             = $indexerHelper->getConfigurableOptionPriceSelect($write, $finalPriceTable);
        
        /*
        if ($this->getVersionHelper()->isGe1900()) {
            $statusCond         = $write->quoteInto(' = ?', Mage_Catalog_Model_Product_Status::STATUS_ENABLED);
            $this->_addAttributeToSelect($select, 'status', 'le.entity_id', 'cs.store_id', $statusCond);
        }
        */
        
        $query              = $select->insertFromSelect($coaTable);
        $write->query($query);
        
        $select             = $indexerHelper->getAggregatedConfigurableOptionPriceSelect($write, $coaTable);
        $query              = $select->insertFromSelect($copTable);
        $write->query($query);
        
        $table  = array('i' => $finalPriceTable);
        $select = $indexerHelper->getConfigurableOptionFinalPriceSelect($write, $copTable);
        $query = $select->crossUpdateFromSelect($table);
        $write->query($query);
        
        /*
        if ($this->getVersionHelper()->isGe1900()) {
            $select             = $write->select()
                ->from($table)
                ->join(
                    array('e' => $this->getTable('catalog/product')),
                    'e.entity_id = i.entity_id',
                    array()
                )
                ->joinLeft(
                    array('coa' => $coaTable),
                    'coa.parent_id = i.entity_id',
                    array()
                )
                ->where('e.type_id = ?', $this->getTypeId())
                ->where('coa.parent_id IS NULL');
            $query              = $select->deleteFromSelect('i');
            $write->query($query);
        }
        */
        
        if ($this->getVersionHelper()->isGe1620()) {
            $write->delete($coaTable);
            $write->delete($copTable);
        } else {
            if ($this->useIdxTable()) {
                $write->truncate($coaTable);
                $write->truncate($copTable);
            } else {
                $write->delete($coaTable);
                $write->delete($copTable);
            }
        }
        
        return $this;
    }
    /**
     * Mode final prices index to primary temporary index table
     *
     * @return Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Indexer_Price_Default
     */
    protected function _movePriceDataToIndexTable()
    {
        $indexerHelper      = $this->getProductPriceIndexerHelper();
        $columns            = $indexerHelper->getPriceSelectColumns();
        $write              = $this->_getWriteAdapter();
        $table              = $this->_getDefaultFinalPriceTable();
        $select             = $write->select()->from($table, $columns);
        $query              = $select->insertFromSelect($this->getIdxTable());
        $write->query($query);
        
        if ($this->getVersionHelper()->isGe1620()) {
            $write->delete($table);
        } else {
            if ($this->useIdxTable()) {
                $write->truncate($table);
            } else {
                $write->delete($table);
            }
        }
        
        return $this;
    }
}