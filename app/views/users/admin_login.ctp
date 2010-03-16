<div id="content">
<div class="span-4">
&nbsp;
</div>
<div id="home" class="span-20 last">
<?php
    $session->flash('auth');
    echo $form->create('User', array('admin' => true, 'action' => 'login'));
    echo $form->input('email');
    echo $form->input('password');
    echo $form->end('Login');
?>
</div>
</div>