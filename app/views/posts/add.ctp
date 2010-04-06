<?php
$javascript->link('jquery/jquery.min', false);
$javascript->link('jquery/plugins/jquery.validate', false);
$javascript->link('jquery/plugins/jquery.maskedinput', false);
$javascript->link('form-validate', false);
?>
<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-19 last">
<?php 
/*kk*/
 echo $form->create('Post', array('type' => 'file'));
 //debug($temp3);
 echo $form->label('Select a category');
 echo $form->select('category_id', $temp3, null, array('class' => 'required'), '');
 //echo $form->label('Select Duration');
 echo $form->input('duration',array('class' => 'text required'));
 echo $form->input('title', array('class' => 'text required'));
 echo $form->input('description', array('class' => 'text required'));
 echo $form->input('email',array('default' => $user['User']['email'],'class' => 'required email'));
 echo $form->input('business_name',array('default' => $user['User']['name'],'class' => 'required'));
 echo $form->input('price', array('class' => 'text required'));
 echo $form->input('website', array('class' => 'text required'));
 echo $form->select('typeofad', $typeofad, null, array('class' => 'required'), '');
 echo $form->select('postedby', $postedby, null, array('class' => 'required'), '');
 echo $form->input('Country.Country', array( 'type' => 'select', 'multiple' => true,'size' => 10,'class' => 'required' ));
 echo $form->select('city_id', $cities, null, array('class' => 'required'), 'Select a city');
 echo $form->input('address',array('default' => $user['Profile']['address1'],'class' => 'required'));
 echo $form->input('contact_number',array('default' => $user['User']['phone'],'class' => 'required'));
 echo $form->input('Image.0.filename', array('type' => 'file'));
 echo $form->end('Post AD');
?> 
</div>