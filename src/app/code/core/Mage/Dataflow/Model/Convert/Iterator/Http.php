<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Dataflow
 * @copyright   Copyright (c) 2014 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */


/**
 * Convert HTTP adapter
 *
 * @category   Mage
 * @package    Mage_Dataflow
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Dataflow_Model_Convert_Iterator_Http extends Mage_Dataflow_Model_Convert_Adapter_Abstract
{
    public function load()
    {
        if (!$_FILES) {
?>
<form method="POST" enctype="multipart/form-data">
File to upload: <input type="file" name="io_file"/> <input type="submit" value="Upload"/>
</form>
<?php
            exit;
        }
        if (!empty($_FILES['io_file']['tmp_name'])) {
            $uploader = new Mage_Core_Model_File_Uploader('io_file');
            $uploader->setAllowedExtensions(array('csv','xml'));
            $path = Mage::app()->getConfig()->getTempVarDir().'/import/';
            $uploader->save($path);
            if ($uploadFile = $uploader->getUploadedFileName()) {
                $fp = fopen($uploadFile, 'rb');
                while ($row = fgetcsv($fp)) {

                }
                fclose($fp);
            }
        }
        return $this;
    }

}