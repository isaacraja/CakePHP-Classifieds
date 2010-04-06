<?php
  // app/models/event.php
class Event extends AppModel {
	var $name = 'Event';
	var $belongsTo = array('User');
	var $actsAs = array('Sluggable'=> array('label' => 'name' ,'overwrite' => false));
	
	
	var $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a Name'
			),
		'email' => array(
			'rule' => 'email',
			'required' => true,
			'message' => 'Please enter a valid Email'
			),
		'description' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Description'
			),
		'phone' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Phone No'
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
		'specialatevent' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Special at Event'
			), 
		'address' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Address'
			), 
		'noofdays' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a No of Days'
			),
		'company' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a Company Name'
			),							  
		  
		);
  }
?>