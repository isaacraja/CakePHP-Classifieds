<?php 
 echo $form->create('Post');
 //debug($temp3);
 echo "Select a Category";
 echo $form->select('category_id', $temp3, null, array(), '');
 echo "Select an User";
 echo $form->select('user_id',$temp4, null, array(), '');
 echo $form->input('title');
 echo $form->input('description');
 echo $form->input('email');
 echo $form->input('place');
 echo $form->input('name');
 echo $form->input('price');
 echo $form->input('website');
 echo $form->input('typeofad');
 echo $form->input('country');
 echo $form->input('address');
 echo $form->input('active');
 echo $form->end('Post AD');
?> 