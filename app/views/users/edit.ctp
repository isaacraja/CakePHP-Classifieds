<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-20 last">
<?php
$session->flash();
$session->flash('auth'); 
		echo $form->create('User', array('action' => 'register'));
    echo $form->input('email');
    echo $form->input('password',array('type' => 'password','default'=> ''));
		echo $form->input('confirm_password',array('type' => 'password','default'=> ''));
		echo $form->input('name');
		echo $form->input('phone');
		echo $form->input('contact_person');
		echo $form->input('gender');
		echo $form->input('company_name');
		echo $form->input('address1');
		echo $form->input('address2');
		echo $form->input('area');
		echo $form->input('city');
		echo $form->input('state');
		echo $form->input('pincode');
		echo $form->input('website');
		echo $form->input('mobile');
		echo $form->input('fax');
		echo $form->input('business_category');
		 echo $form->input('id', array('type'=>'hidden'));
    echo $form->end('Update Profile Details');
?>
</div>