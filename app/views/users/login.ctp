<div class="span-4">
&nbsp;
</div>
<div id="home" class="span-20 last">
<?php
    $session->flash();
		$session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('email');
    echo $form->input('password');
    echo $form->end('Login');
?>
</div>