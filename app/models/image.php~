<?php
// app/models/post.php
class Image extends AppModel {
	var $name = 'Image';
	
		var $actsAs = array('Polymorphic','MeioUpload' => array( 'filename' => array(
	'dir' => 'img{DS}posts',
 					'create_directory' => true,
 					'max_size' => 2097152,
 					'max_dimension' => 'w',
 					'thumbnailQuality' => 50,
 					'useImageMagick' => false,
 					'imageMagickPath' => '/usr/bin/convert',
 					'allowed_mime' => array( 'image/gif', 'image/jpeg', 'image/pjpeg', 'image/png'),
 					'allowed_ext' => array('.jpg', '.jpeg', '.png', '.gif'),
 					'thumbsizes' => array(
 						'small'  => array('width' => 100, 'height' => 100),
 						'medium' => array('width' => 220, 'height' => 220),
 						'large'  => array('width' => 800, 'height' => 600)
 					),
 				)
 			)
 		);
		
		var $belongsTo = array(
			'Post' => array('className' => 'Post',
								'foreignKey' => 'post_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);
	
	var $validate = array(
    'filename' => array(
        'Empty' => array(
            'check' => false
        ),
        'InvalidExt' => array(
            'message' => 'This file extension isnt allowed.'
        )
    )
);

}
?>
