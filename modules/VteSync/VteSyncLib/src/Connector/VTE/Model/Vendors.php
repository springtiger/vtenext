<?php
/* crmv@197423 */

namespace VteSyncLib\Connector\VTE\Model;

class Vendors extends GenericVTERecord {

	protected static $staticModule = 'Vendors';
	
	protected static $fieldMap = array(
		'vendorname' => 'vendorname',
		'email' => 'email',
		'phone' => 'phone',
		'fax' => 'fax',
		'website' => 'website',
		'glacct' => 'glacct',
		'category' => 'category',
		'street' => 'street',
		'pobox' => 'pobox',
		'city' => 'city',
		'state' => 'state',
		'postalcode' => 'postalcode',
		'country' => 'country',
		'description' => 'description'
		
		// VTE => CommonRecord
	);

	// if needed, you can override methods and change fields/behaviour
}
