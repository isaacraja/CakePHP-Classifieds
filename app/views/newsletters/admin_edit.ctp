<div id="content">
<h3>Edit Newsletter</h3>
<?php 
 echo $form->create('Newsletter');
 //debug($temp3);
 echo $form->input('title');
 echo $form->input('body');
 echo $form->input('id', array('type'=>'hidden'));
 echo $form->end('Update Newletter');
?>
</div>