<div id="content">
<h3>Add Newsletter</h3>
<?php 
 echo $form->create('Newsletter');
 //debug($temp3);
 echo $form->input('title');
 echo $form->input('body');
 echo $form->end('Create Newsletter');
?>
 </div>
