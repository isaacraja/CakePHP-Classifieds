<?php 
 echo $form->create('Category');
 //debug($temp3);
 echo "Select a Parent Category";
 echo $form->select('parent_id', $temp3, null, array(), '');
 echo $form->input('name');
 echo $form->end('Add');
?> 