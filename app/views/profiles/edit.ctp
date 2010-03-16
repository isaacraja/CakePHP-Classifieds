<?php
$javascript->link('jquery/jquery.min', false);
$javascript->link('jquery/plugins/jquery.validate', false);
$javascript->link('jquery/plugins/jquery.maskedinput', false);
$javascript->link('form-validate', false);
?>
<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-19 last">
<?php
$session->flash();
$session->flash('auth'); 
		echo $form->create('Profile', array('action' => 'edit'));
		echo $form->input('contact_person',array('class' => 'text required'));
		echo $form->input('gender',array('class' => 'text required'));
		echo $form->input('company_name',array('class' => 'text required'));
		echo $form->input('address1',array('class' => 'text required'));
		echo $form->input('address2',array('class' => 'text required'));
		echo $form->input('area',array('class' => 'text required'));
		echo $form->input('city',array('class' => 'text required'));
		echo $form->input('state',array('class' => 'text required'));
		echo $form->input('pincode',array('class' => 'text required'));
		echo $form->input('website',array('class' => 'text required'));
		echo $form->input('mobile',array('class' => 'text required'));
		echo $form->input('fax',array('class' => 'text required'));
		echo $form->input('business_category',array('class' => 'text required'));
		//echo $form->input('Profile.id', array('type'=>'hidden'));
    echo $form->end('Update Profile Details');
?>
</div>
