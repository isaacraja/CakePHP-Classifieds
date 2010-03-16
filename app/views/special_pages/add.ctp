<?php
$javascript->link('jquery/jquery.min', false);
$javascript->link('jquery/plugins/jquery.validate', false);
$javascript->link('jquery/plugins/jquery.maskedinput', false);
$javascript->link('form-validate', false);
?>
<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-19 last">
<h3>Add Special Page</h3>
<?php 
echo $form->create('SpecialPage', array('type' => 'file'));
 //debug($temp3);
 echo $form->input('product_offered',array('class' => 'text required'));
 echo $form->input('product_features',array('class' => 'text required'));
 echo $form->input('description',array('class' => 'text required'));
 echo $form->input('company_profile',array('class' => 'text required'));
 echo $form->input('address',array('class' => 'text required'));
 echo $form->input('website',array('class' => 'text required'));
 echo $form->input('contact_person',array('class' => 'text required'));
 echo $form->input('email',array('class' => 'text required email'));
 echo $form->input('offer',array('class' => 'text required'));
 //echo $form->input('active');
 //echo $form->input('id', array('type'=>'hidden'));
 echo $form->end('Add SpecialPage'); 
?> 
</div>