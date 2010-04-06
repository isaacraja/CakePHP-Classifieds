<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-19 last">
<h3>Edit Post</h3>
<?php 
echo $form->create('Post', array('type' => 'file'));
 //debug($temp3);
 echo $form->label('Select a category');
 echo $form->select('category_id', $temp3, null, array(), '');
 echo $form->input('title');
 echo $form->input('description');
 echo $form->input('email', array('div' => false));
 echo $form->input('duration',array('class' => 'text'));
 echo $form->input('business_name');
 echo $form->input('price');
 echo $form->input('website');
 echo $form->select('typeofad', $typeofad, null, array(), '');
 echo $form->select('postedby', $postedby, null, array(), '');
 echo $form->select('city_id', $cities, null, array(), ''); 
 echo $form->input('Country.Country');
 echo $form->input('contact_number');
 echo $form->input('Image.0.filename', array('type' => 'file'));
 echo $form->input('address');
 //echo $form->input('active');
 echo $form->input('id', array('type'=>'hidden'));
 echo $form->end('Edit AD');
?> 
</div>
