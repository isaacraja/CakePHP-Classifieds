<?php 
 echo $form->create('ContactLog', array('action' => 'index'));
 //debug($temp3);
 echo "To";
 echo $form->input('Post.name');
 //echo $form->select('category_id', $temp3, null, array(), '');
 echo $form->input('Post.title');
 echo $form->input('name');
 echo $form->input('email');
 echo $form->input('phone');
 echo $form->input('message');
 echo $form->input('price');
 echo $form->end('Send Request');
?> 