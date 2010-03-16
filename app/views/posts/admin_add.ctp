<div id="content">
<h3>Add Post</h3>
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
 echo $form->input('duration',array('class' => 'text'));
 echo $form->input('business_name');
 echo $form->input('price');
 echo $form->input('website');
 echo $form->select('typeofad', $typeofad, null, array(), '');
 echo $form->select('postedby', $postedby, null, array(), '');
 echo $form->select('city_id', $cities, null, array(), ''); 
 echo $form->input('Country.Country');
 echo $form->input('contact_number',array('default' => $user['User']['phone']));
 echo $form->input('Image.0.filename', array('type' => 'file'));
 echo $form->input('address');
 echo $form->input('active');
 echo $form->end('Post AD');
?> 
</div>