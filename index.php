<?php
// get vendor from vendor logged in session
$vendor = Mage::getSingleton('udropship/session');
$vendor_id = $vendor->getVendorId();

// get vendors data from database
$vendors = Mage::getModel('udropship/vendor')->getCollection();
echo "<pre>";
foreach($vendors as $vendor) {
	$ven = Mage::getModel('udmember/membership')->load($vendor->getId());
	$data = $vendor->getData();
	echo $data['vendor_type'];
	//restaurant_merchant
}
echo "</pre>";
?>