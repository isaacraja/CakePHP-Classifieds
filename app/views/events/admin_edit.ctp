<div id="content">
<h3>Add Event</h3>
<?php 
 echo $form->create('Event');
 //debug($temp3);
 echo "Select an User";
 echo $form->select('user_id',$users, null, array(), '');
 echo $form->input('name');
 echo $form->input('from');
 echo $form->input('to');
 echo $form->input('city');
 echo $form->input('description');
 echo $form->input('company');
 echo $form->input('address');
 echo $form->input('noofdays');
 echo $form->input('specialatevent');
 echo $form->input('email');
 echo $form->input('phone');
 echo $form->input('website');
 echo $form->input('active');
 echo $form->input('id', array('type'=>'hidden'));
 echo $form->end('Edit Event');
?> 
</div>