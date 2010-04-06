<div id="home">
	<!-- COLUMNA 1 -->
	<div id="ssome">
<?php 
 echo $form->create('Banner');
 //debug($temp3);
 //echo $form->select('category_id', $temp3, null, array(), '');
 echo $form->input('company_name');
 echo $form->input('contact_person');
 echo $form->input('details');
 echo $form->input('service_type');
 echo $form->input('city');
 echo $form->input('email');
 echo $form->input('phone');
 echo $form->end('Submit');
?> 
 </div></div>