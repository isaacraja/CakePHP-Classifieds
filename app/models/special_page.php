<?php
class SpecialPage extends AppModel {

	var $name = 'SpecialPage';
	var $belongsTo = array('User');
		var $hasMany = array(
			'Image' => array('className' => 'Image',
								'foreignKey' => 'special_page_id',
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
	
	var $actsAs = array('Sluggable'=> array('overwrite' => false));	
	
	var $validate = array(
        'product_offered' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Please Enter a product_offered'
        ),
        'product_features' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Please enter a valid product_features'
        ),
        'description' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Please enter a valid Description'
        ),
        'contact_person' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Please enter a contact_person'
        ),
  'email' => array(
                'rule' => 'email',
                'required' => true,
                'message' => 'Please enter a valid Email Id'
        ),
   'website' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Please enter a valid Website'
        ), 
      'company_profile' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Please enter a company_profile'
        ), 
     'address' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Please enter a valid Address'
        ), 
      'offer' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Please enter a valid Offer'
        ),                                   
    );


}
?>
