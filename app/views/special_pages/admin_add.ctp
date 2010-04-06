<div id="content">
<h3>Add SpecialPage</h3>
<?php 
 echo $form->create('SpecialPage');
 //debug($temp3);
 echo "Select an User";
 echo $form->select('user_id',$users, null, array(), '');
 echo $form->input('product_offered');
 echo $form->input('product_features');
 echo $form->input('description');
 echo $form->input('company_profile');
 echo $form->input('address');
 echo $form->input('website');
 echo $form->input('contact_person');
 echo $form->input('email');
 echo $form->input('offer');
 echo $form->input('active');
 echo $form->end('Add SpecialPage');
?> 
</div>