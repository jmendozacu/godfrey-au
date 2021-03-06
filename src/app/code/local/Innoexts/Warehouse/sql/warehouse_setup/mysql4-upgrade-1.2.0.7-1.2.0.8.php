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
$installer                                      = $this;

$connection                                     = $installer->getConnection();

$helper                                         = Mage::helper('warehouse');

$stockTable                                     = $installer->getTable('cataloginventory/stock');

$productIndexEavTable                           = $installer->getTable('catalog/product_index_eav');
$productIndexEavIdxTable                        = $installer->getTable('catalog/product_eav_indexer_idx');
$productIndexEavTmpTable                        = $installer->getTable('catalog/product_eav_indexer_tmp');

$productIndexEavDecimalTable                    = $installer->getTable('catalog/product_index_eav_decimal');
$productIndexEavDecimalIdxTable                 = $installer->getTable('catalog/product_eav_decimal_indexer_idx');
$productIndexEavDecimalTmpTable                 = $installer->getTable('catalog/product_eav_decimal_indexer_tmp');

$installer->startSetup();

/**
 * Product Index Eav
 */
$connection->addColumn($productIndexEavTable, 'stock_id', 'smallint(6) unsigned null default null after `store_id`');
$connection->addKey($productIndexEavTable, 'IDX_CATALOG_PRODUCT_INDEX_EAV_STOCK_ID', array('stock_id'), 'index');
$connection->addKey(
    $productIndexEavTable, 
    'PRIMARY', 
    array('entity_id', 'attribute_id', 'store_id', 'stock_id', 'value'), 
    'primary'
);
$connection->addConstraint(
    'FK_CATALOG_PRODUCT_INDEX_EAV_STOCK_ID', 
    $productIndexEavTable, 
    'stock_id', 
    $stockTable, 
    'stock_id'
);

/**
 * Product Index Eav Index
 */
$connection->addColumn($productIndexEavIdxTable, 'stock_id', 'smallint(6) unsigned null default null after `store_id`');
$connection->addKey($productIndexEavIdxTable, 'IDX_CATALOG_PRODUCT_INDEX_EAV_IDX_STOCK_ID', array('stock_id'), 'index');
$connection->addKey(
    $productIndexEavIdxTable, 
    'PRIMARY', 
    array('entity_id', 'attribute_id', 'store_id', 'stock_id', 'value'), 
    'primary'
);

/**
 * Product Index Eav Temp
 */
$connection->addColumn($productIndexEavTmpTable, 'stock_id', 'smallint(6) unsigned null default null after `store_id`');
$connection->addKey($productIndexEavTmpTable, 'IDX_CATALOG_PRODUCT_INDEX_EAV_TMP_STOCK_ID', array('stock_id'), 'index');
$connection->addKey(
    $productIndexEavTmpTable, 
    'PRIMARY', 
    array('entity_id', 'attribute_id', 'store_id', 'stock_id', 'value'), 
    'primary'
);

/**
 * Product Index Eav Decimal
 */
$connection->addColumn($productIndexEavDecimalTable, 'stock_id', 'smallint(6) unsigned null default null after `store_id`');
$connection->addKey($productIndexEavDecimalTable, 'IDX_CATALOG_PRODUCT_INDEX_EAV_DECIMAL_STOCK_ID', array('stock_id'), 'index');
$connection->addKey(
    $productIndexEavDecimalTable, 
    'PRIMARY', 
    array('entity_id', 'attribute_id', 'store_id', 'stock_id', 'value'), 
    'primary'
);
$connection->addConstraint(
    'FK_CATALOG_PRODUCT_INDEX_EAV_DECIMAL_STOCK_ID', 
    $productIndexEavDecimalTable, 
    'stock_id', 
    $stockTable, 
    'stock_id'
);

/**
 * Product Index Eav Decimal Index
 */
$connection->addColumn($productIndexEavDecimalIdxTable, 'stock_id', 'smallint(6) unsigned null default null after `store_id`');
$connection->addKey($productIndexEavDecimalIdxTable, 'IDX_CATALOG_PRODUCT_INDEX_EAV_DECIMAL_IDX_STOCK_ID', array('stock_id'), 'index');
$connection->addKey(
    $productIndexEavDecimalIdxTable, 
    'PRIMARY', 
    array('entity_id', 'attribute_id', 'store_id', 'stock_id', 'value'), 
    'primary'
);

/**
 * Product Index Eav Temp
 */
$connection->addColumn($productIndexEavDecimalTmpTable, 'stock_id', 'smallint(6) unsigned null default null after `store_id`');
$connection->addKey($productIndexEavDecimalTmpTable, 'IDX_CATALOG_PRODUCT_INDEX_EAV_DECIMAL_TMP_STOCK_ID', array('stock_id'), 'index');
$connection->addKey(
    $productIndexEavDecimalTmpTable, 
    'PRIMARY', 
    array('entity_id', 'attribute_id', 'store_id', 'stock_id', 'value'), 
    'primary'
);

$installer->endSetup();
