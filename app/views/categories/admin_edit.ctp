<div id="top-panel">
            <div id="panel">
						<ul>
							<li><?php echo $html->link(__('New Category', true), array('action'=>'add')); ?></li>
							<li><?php echo $html->link(__('List Category', true), array('controller'=> 'category', 'action'=>'index')); ?> </li>
						</ul>
            </div>
      </div>
<div id="content">
<?php 
 echo $form->create('Category');
 //debug($temp3);
 echo "Select a  Category";
 echo $form->select('id', $categories, null, array(), '');
 echo $form->input('name');
 echo $form->input('id', array('type'=>'hidden'));
 echo $form->end('Edit Category');
?>
</div> 