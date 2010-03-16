<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2009-07-02 17:07:34 : 1246537414*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $banners = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'company_name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'contact_person' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'details' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'service_type' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'city' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'phone' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'name' => array('type' => 'string', 'null' => false, 'default' => ' '),
		'order' => array('type' => 'string', 'null' => false, 'default' => ' '),
		'friendly_name' => array('type' => 'string', 'null' => false, 'default' => ' '),
		'description' => array('type' => 'string', 'null' => false, 'default' => ' '),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $cities = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'city' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $contact_logs = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'listing' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'message' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $countries = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'country' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $countries_posts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $events = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'from' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'to' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'city' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'company' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'address' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'noofdays' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'specialatevent' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'website' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $groups = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $groups_permissions = array(
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'permission_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array()
	);
	var $groups_users = array(
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array()
	);
	var $images = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'primary'),
		'filename' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'dir' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'mimetype' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'filesize' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'post_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'special_page_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $newsletters = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'body' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $permissions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $posts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'duration' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'business_name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'price' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'website' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'typeofad' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'postedby' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'address' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'contact_number' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'hits' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20),
		'image_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'city_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $profiles = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'country' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'points' => array('type' => 'string', 'null' => false, 'default' => '0'),
		'contact_person' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'gender' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'company_name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'address1' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'address2' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'area' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'city' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'state' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'pincode' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'website' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'mobile' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'fax' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'business_category' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $special_pages = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'product_offered' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'product_features' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'company_profile' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'address' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'website' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'contact_person' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'offer' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'country' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'points' => array('type' => 'string', 'null' => false, 'default' => '0'),
		'contact_person' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'gender' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'company_name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'address1' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'address2' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'area' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'city' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'state' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'pincode' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'website' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'mobile' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'fax' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'business_category' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
}
?>