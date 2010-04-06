<div id="sidebar" class="span-4 colborder">
Menu Left
</div>
<div id="home" class="span-19 last">
<h3>Register</h3>
<?php
	echo $form->create('User', array('action' => 'register'));
    echo $form->input('email');
    echo $form->input('password');
		echo $form->input('confirm_password',array('type' => 'password'));
		echo $form->input('name');
		echo $form->input('phone');
		echo $form->input('captcha',array('error' => array('validateCaptcha' => array('Invalid captcha'))));
    echo $form->end('Register');
?>
 <img id='captcha' src="<?php echo $html->url('/users/captcha'); ?>" />
 <a href="javascript:void(0);" onclick="javascript:document.images.captcha.src='<?php echo $html->url('/users/captcha');?>?' + Math.round(Math.random(0)*1000)+1">Reload image</a> 
 </div>
