<?php

try {
    $installer = $this;
    $installer->startSetup();

    // Force the store to be admin
    Mage::app()->setUpdateMode(false);
    //Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
    if (!Mage::registry('isSecureArea'))
        Mage::register('isSecureArea', 1);

    //==========================================================================
    // Footer Links Page | Godfreys
    //==========================================================================
    $blockTitle = "Footer Links";
    $blockIdentifier = "footer-links";
    $blockIsActive = 1;
    $blockStores = array(Mage::app()->getStore()->getStoreId());
    $blockContent = <<<EOD
        	<div class="nav-col">
	<h4>Vacuum Cleaners</h4>
		<ul>
		<li><a href="/vacuum-cleaners/types/bagless">Bagless</a></li>
		<li><a href="/vacuum-cleaners/types/bagged">Bagged</a></li>
		<li><a href="/vacuum-cleaners/types/upright">Upright</a></li>
		<li><a href="/vacuum-cleaners/types/canister">Barrel / Canister</a></li>
		<li><a href="/vacuum-cleaners/types/wet-dry">Wet &amp; Dry</a></li>
		<li><a href="/vacuum-cleaners/types/stick">Stick Vacuums</a></li>
		<li><a href="/vacuum-cleaners/types/handheld">Handheld Vacs</a></li>
		<li><a href="/vacuum-cleaners/types/lightweight">Compact / Lightweight</a></li>
		<li><a href="/vacuum-cleaners/speciality/anti-allergy-vaccum-cleaners">Anti-Allergy</a></li>
		<li><a href="/vacuum-cleaners/speciality/asthma-vacuum-cleaners">Asthma</a></li>
		<li><a href="/vacuum-cleaners/speciality/pet-hair-vacuum-cleaners">Pet Hair</a></li>
		<li><a href="/vacuum-cleaners/commercial-vacuum-cleaners">Commercial Vacuums</a></li>
		<li><a href="/vacuum-cleaners/ducted-vacuum-cleaners">Ducted Vacuums</a></li>
		</ul>
	</div>
	<div class="nav-col">
		<h4>Steam &amp; Shampoo</h4>
		<ul>
		<li><a href="/steam-shampoo/steam-mops">Steam Mops</a></li>
		<li><a href="/steam-shampoo/steam-cleaners">Steam Cleaners</a></li>
		<li><a href="/steam-shampoo/carpet-shampooers">Carpet Shampooers</a></li>
		</ul>
		<h4 class="desktop"><a style="text-decoration: none;" href="/vacuum-bags-parts-accessories/accessory-finder-1">Accessory Finder</a></h4>
	</div>
	<div class=" nav-col">
		<h4>About the Site</h4>
		<ul>
		<li><a href="/delivery-information">Delivery Information</a></li>
		<li><a title="Trade-in offers on vacuum cleaners" href="/trade-ins" target="_self">Trade-In Discounts</a></li>
		<li><a href="/catalog/seo_sitemap/category/">Site Map</a></li>
		<li><a title="Vacuum Cleaner Repairs &amp; Servicing" href="/vacuum-cleaner-repairs-service">Vacuum Repairs &amp; Service</a></li>
		<li><a href="/exchange-returns">Exchanges &amp; Returns</a></li>
		<li><a href="http://www.godfreys.com.au/godfreys-blog/blog-overview">Godfreys Blog</a></li>
		<li><a title="Suppliers to the Godfreys Website" href="/our-suppliers" target="_self">Our Suppliers</a></li>
		<li><a href="/national-asthma-council" target="_self">National Asthma Council</a></li>
		<li><a href="/privacy-policy" target="_self">Privacy Policy</a></li>
		<li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
		</ul>
	</div>
	<div class="nav-col">
		<h4>About</h4>
		<ul>
		<li><a href="/about-us " target="_self">Company&nbsp;History</a></li>
		</ul>
	</div>

<div class="nav-col bx-support">
	<h4>Support</h4>
	<ul>
	<li><a href="/contact-us">Contact Us</a></li>
	<li><a href="/store-locator">Find a Store</a></li>
	<li><a href="/faq" target="_self">FAQ</a></li>
	<li><a href="/warranty/registration/" target="_self">Register Your Warranty</a></li>
	<li><a href="/asthma-allergy-sufferers">Asthma &amp; Allergy Sufferers</a></li>
	<li><a href="/pet-owners">Pet Owners</a></li>
	</ul>
</div>
EOD;

    $cmsBlock = array(
        'title'         => $blockTitle,
        'identifier'    => $blockIdentifier,
        'content'       => $blockContent,
        'is_active'     => 1,
        'stores'        => Mage::app()->getStore()->getStoreId()
    );

    $block = Mage::getModel('cms/block')->getCollection()
        ->addStoreFilter(Mage::app()->getStore()->getStoreId(), $withAdmin = true)
        ->addFieldToFilter('identifier', $blockIdentifier)
        ->getFirstItem()
        ;
    if ($block->getId() == 0)
    {
        $block = Mage::getModel('cms/block');
    }
    else
    {
        // if exists then delete
        $block->delete();
        $block = Mage::getModel('cms/block');
    }

    $block->setTitle($blockTitle);
    $block->setIdentifier($blockIdentifier);
    $block->setStores($blockStores);
    $block->setIsActive($blockIsActive);
    $block->setContent($blockContent);
    $block->save();

    //==========================================================================
    //==========================================================================
    //==========================================================================



    $installer->endSetup();
} catch (Excpetion $e) {
    Mage::logException($e);
    Mage::log("ERROR IN SETUP " . $e->getMessage());
}

