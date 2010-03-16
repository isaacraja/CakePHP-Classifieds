<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-19 last">
<?php
$session->flash();
$session->flash('auth'); 
		echo $form->create('User', array('action' => 'changepass'));
    echo $form->input('password',array('type' => 'password','default'=> ''));
		echo $form->input('confirm_password',array('type' => 'password','default'=> ''));
		//echo $form->input('id', array('type'=>'hidden'));
    echo $form->end('Change Password');
?>
</div>
