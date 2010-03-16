<div id="top-panel">
            <div id="panel">
                 <ul>
					<li><a href="users/add" class="useradd">Add user</a></li>
                    <li><a href="#" class="group">User groups</a></li>
            		<li><a href="#" class="search">Find user</a></li>
                    <li><a href="#" class="online">Users online</a></li>
                </ul>
            </div>
      </div>
        <div id="wrapper">
            <div id="content">
<?php
$session->flash();
$session->flash('auth');
		echo $form->create('User', array('action' => 'edit'));
    echo $form->input('email');
    echo $form->input('password');
		//echo $form->input('confirm_password',array('type' => 'password'));
		echo $form->input('name');
		echo $form->input('phone');
		echo $form->input('id', array('type'=>'hidden'));
    echo $form->end('Update Profile Details');
?>
</div>
</div>