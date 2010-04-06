<?php
$javascript->link('jquery/jquery.min', false);
$javascript->link('jquery/plugins/jquery.validate', false);
$javascript->link('jquery/plugins/jquery.maskedinput', false);
$javascript->link('form-validate', false);
?>
<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-19 last">
<h3>Edit Event</h3>
<?php 
echo $form->create('Event');
 //debug($temp3);
 echo $form->input('name',array('class' => 'text required'));
 echo $form->input('from');
 echo $form->input('to');
 echo $form->input('city',array('class' => 'text required'));
 echo $form->input('description',array('class' => 'text required'));
 echo $form->input('company',array('class' => 'text required'));
 echo $form->input('address',array('class' => 'text required'));
 echo $form->input('noofdays',array('class' => 'text required'));
 echo $form->input('specialatevent',array('class' => 'text required'));
 echo $form->input('email',array('class' => 'required email'));
 echo $form->input('phone',array('class' => 'text required'));
 echo $form->input('website',array('class' => 'text required'));
 // echo $form->input('active',array('class' => 'text required'));
 // echo $form->input('id', array('type'=>'hidden'));
 echo $form->end('Edit Event');
?> 
</div>