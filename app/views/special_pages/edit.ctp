<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-19 last">
<h3>Edit Special Page</h3>
<?php 
echo $form->create('SpecialPage');
 //debug($temp3);
 echo $form->input('product_offered');
 echo $form->input('product_features');
 echo $form->input('description');
 echo $form->input('company_profile');
 echo $form->input('address');
 echo $form->input('website');
 echo $form->input('contact_person');
 echo $form->input('email');
 echo $form->input('offer');
 //echo $form->input('active');
 echo $form->input('id', array('type'=>'hidden'));
 echo $form->end('Add SpecialPage'); 
?> 
</div>
