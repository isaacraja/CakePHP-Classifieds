 <div id="top-panel">
            <div id="panel">
						<ul>
							<li><?php echo $html->link(__('New Category', true), array('action'=>'add')); ?></li>
							<li><?php echo $html->link(__('List Category', true), array('controller'=> 'categories', 'action'=>'index')); ?> </li>
						</ul>
            </div>
      </div>
<div id="content">
<h3>Add Category</h3>
<?php 
 echo $form->create('Category');
 //debug($temp3);
 echo "Select a Parent Category";
 echo $form->select('parent_id', $categories, null, array(), '');
 echo $form->input('name');
 echo $form->end('Add');
?> 
</div>