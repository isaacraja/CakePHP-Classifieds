<?php
  // app/models/post.php
class Post extends AppModel {
	var $name = 'Post';
	var $belongsTo = array('Category','User','City');
/*var $hasMany = array(
  'Image' => array(
  'className' => 'Image',
  'foreignKey' => 'image_id',
  'conditions' => array('Image.class' => 'Post'),
  'dependent' => true
  )
  );  */
	var $hasMany = array(
		'Image' => array('className' => 'Image',
						 'foreignKey' => 'post_id',
						 'dependent' => true,
						 'conditions' => '',
						 'fields' => '',
						 'order' => 'Image.id ASC',
						 'limit' => '',
						 'offset' => '',
						 'exclusive' => '',
						 'finderQuery' => '',
						 'counterQuery' => ''
			)
		);
	var $hasAndBelongsToMany = array(
		'Country' =>
		array(
			'className'				 => 'Country',
			'joinTable'				 => 'countries_posts',
			'foreignKey'			 => 'post_id',
			'associationForeignKey'	 => 'country_id',
			'unique'				 => true,
			'conditions'			 => '',
			'fields'				 => '',
			'order'					 => '',
			'limit'					 => '',
			'offset'				 => '',
			'finderQuery'			 => '',
			'deleteQuery'			 => '',
			'insertQuery'			 => ''
			)
		);

	var $actsAs = array('Sluggable'=> array('overwrite' => false));
	
	var $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please Enter a Title'
			),
		'email' => array(
			'rule' => 'email',
			'required' => true,
			'message' => 'Please enter a valid email'
			),
		'description' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Description'
			),
		'business_name' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Business Name'
			),
		'price' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Price'
			),
		'website' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Website'
			), 
		'typeofad' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Type of Ad'
			), 
		'postedby' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Posted By'
			), 
		'address' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Address'
			), 
		'contact_number' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Contact Number'
			), 
		'duration' => array(
			'rule' => 'alphaNumeric',
			'required' => true,
			'message' => 'Please enter a valid Duration'
			),
		'category_id' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a valid Category'
			),									 
		);

  }
?>
