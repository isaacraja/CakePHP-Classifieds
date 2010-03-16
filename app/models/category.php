<?php
// app/models/category.php
class Category extends AppModel {
	var $name = 'Category';
	var $hasMany = 'Post';
	var $actsAs = array('Tree','Sluggable' => array('label' => 'name' ,'overwrite' => false));
}?>