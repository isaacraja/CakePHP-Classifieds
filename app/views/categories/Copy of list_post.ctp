<?php
$javascript->link('jquery/jquery.min', false);
$javascript->link('jquery/plugins/jquery.autocomplete', false);

$javascript->link('autocompleteAction', false);

?>
<?php echo $html->css('jquery.autocomplete', false); ?>
<div id="home">
	<!-- COLUMNA 1 -->
	<div id="some">
	<ul id="the-list">
	<?php foreach ($data as $data):?> 
			<li>
			<div class="row clearfix">
				<div class="c-1">
				<a href="<?php echo $data['Post']['slug'];?>">
						<img height="76" width="90" alt="<?php echo $data['Post']['title'];?>" src="<?php echo $data['Post']['title'];?>"/>
					</a>				</div>
				<div class="c-2">
					<h3>
						<a title="<?php echo $data['Post']['title'];	?>" href="../../posts/display/<?php echo $data['Post']['slug'];?>">
							<?php echo $data['Post']['title'];	?></a>
					</h3>
					<p><?php echo $data['Post']['description'];	?></p>
				</div>
				<div class="c-3">Rs <?php echo $data['Post']['price'];	?></div>
			</div>
		</li>
		<?php endforeach; ?>
		</ul>
		<?php $paginator->options(array('url' => $this->passedArgs)); ?>
		<?php echo $paginator->prev('<< Previous', null, null, array('class' => 'enabled')); ?>
		<?php echo $paginator->numbers(); ?>
		<?php	echo $paginator->next('Next >>', null, null, array('class' => 'enabled')); ?> 

	</div>
</div>	


	 	<div id="home-extras" class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">
			<!-- CountryOptions.mv -->
<div class="block">
	<h3>Location</h3>
	<ul>
		
		<li>
				Select a City:		
				<!-- CitySelect Start -->
	<div style="">
					<?php echo $form->create('Category', array('action' => 'set_city')); ?>
					<?php echo $form->select('city_id', $cities, null, array('selected' => $session->read('City.city')), ''); ?>
					<?php echo $form->end('Go'); ?>
			</div>
			</li>
	</ul>		
<br>
<?php if(!empty($children)): ?>
<h3>Categories</h3>
	<ul>
		
		<li>
				Select a Sub-category:		
				<!-- CitySelect Start -->
	<div style="">
				<?php	foreach ($children as $children): ?>
					<ul>
					<li><?php echo $html->link($children['Category']['name'] , 'list_post/'.$children['Category']['slug']); ?></li>
				<?php endforeach; ?>	
					</ul>	
			</div>
<?php endif; ?>			
</div>

<!-- END CountryOptions.mv -->				<p class="banner_mobile"><a href="http://www.olx.in/mobilepromopage.php?v=12">OLX Mobile<small>m.olx.in</small></a></p>
			<p class="banner_alerts"><a href="http://www.olx.in/nf/alerts.php" rel="nofollow">Email Alerts</a></p>
			<div class="post">
	<a href="http://www.olx.in/posting.php?src=9" rel="nofollow" class="button3"><span>Post a Free Classified</span></a>
</div>						
		</div></div></div><div class="bb"><div></div></div></div>
	</div>