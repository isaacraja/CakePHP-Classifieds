<?php 
 echo $form->create('Category');
 //debug($temp3);
 echo "Select a  Category";
 echo $form->select('id', $temp3, null, array(), '');
 echo $form->input('name');
 echo $form->input('id', array('type'=>'hidden'));
 echo $form->end('Edit Category');
?> 