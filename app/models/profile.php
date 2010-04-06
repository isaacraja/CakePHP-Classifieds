<?php
  // app/models/profile.php
class Profile extends AppModel {
	var $name = 'Profile';
	
	var $belongsTo = 'User';
	
	//var $actsAs = array('Sluggable'=> array('label' => 'name' ,'overwrite' => false));

	var $validate = array(
		'contact_person' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a Contact Person Name'
			),
		'gender' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Gender'
			),
		'company_name' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Company name'
			),
		'address1' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Address1'
			), 
		'address2' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Address2'
			), 
		'area' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Area'
			),
		'city' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a City'
			),
		'website' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Website'
			),		  
		'state' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid State'
			), 
		'pincode' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Pincode'
			), 
		'mobile' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a Mobile no'
			), 
		'fax' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a Fax'
			),
		'business_category' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a business_category'
			),							  
		  
		);
  }

?>