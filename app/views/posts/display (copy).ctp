<div class="span-4">
<h2>Menu Bar</h2>
  			<?php echo $form->create('Category', array('action' => 'set_city')); ?>
					<?php echo $form->select('city_id', $cities, null, array('selected' => $session->read('City.city')), 'Select a City'); ?>
					<?php echo $form->text('q', array('size'=>'10', 'id'=>'autoComplete')); ?>
					<?php echo $form->end('Go'); ?>
	<p>				
 <?php if(!empty($children)): ?>
<h3>Categories</h3>
				<?php	foreach ($children as $children): ?>
					<ul>
					<li><?php echo $html->link($children['Category']['name'] , 'list_post/'.$children['Category']['slug']); ?></li>
					</ul>
				<?php endforeach; ?>		
<?php endif; ?>			
</div>
<div id="home" class="span-20 last">
	<ul id="the-list">
			<li>
				<a>
						<img height="76" width="90" alt="<?php echo $this->data['Post']['title'];?>" src="<?php echo $this->data['Post']['title'];?>"/>
					</a>
					<h3>
						<a title="<?php echo $data['Post']['title'];	?>"
							<?php echo $data['Post']['title'];	?></a>
					</h3>
					<p><?php echo $data['Post']['description'];	?></p>
			Rs <?php echo $data['Post']['price'];	?>

		</li>
		</ul>
</div>		
