<?php
$javascript->link('jquery/jquery.min', false);
$javascript->link('jquery/plugins/jquery.autocomplete', false);

$javascript->link('autocompleteAction', false);

?>
<?php echo $html->css('jquery.autocomplete', false); ?>
<div id="home">
	<!-- COLUMNA 1 -->
	<div class="column">
			<div class="block" id="c-185">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="list_post/<?php echo $this->data['ForSale'][0]['slug']; ?>"><strong>For Sale</strong></a> <small></small></h3></div></div><div class="bb"><div></div></div></div>
			<ul>
						<?php foreach($this->data['ForSale'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
			</ul>
		</div>
				<div class="block" id="c-186">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="http://www.olx.in/classes-cat-186"><strong>Classes</strong></a> <small>(14,992)</small></h3></div></div><div class="bb"><div></div></div></div>
			<ul>
						<?php foreach($this->data['Classes'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
					</ul>
		</div>
	</div>
	<!-- COLUMNA 2 -->
	<div class="column">
			<div class="block" id="c-362">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="list_post/<?php echo $this->data['Vehicles'][0]['slug']; ?>"><strong>Vehicles</strong></a> <small></small></h3></div></div><div class="bb"><div></div></div></div>
			<ul>
						<?php foreach($this->data['Vehicles'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
			</ul>
		</div>
				<div class="block" id="c-16">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="list_post/<?php echo $this->data['RealEstate'][0]['slug']; ?>"><strong>Real Estate</strong></a> <small></small></h3></div></div><div class="bb"><div></div></div></div>
			<ul>
						<?php foreach($this->data['RealEstate'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
					</ul>
		</div>
				<div class="block" id="c-191">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="list_post/<?php echo $this->data['Services'][0]['slug']; ?>"><strong>Services</strong></a> <small>(29,007)</small></h3></div></div><div class="bb"><div></div></div></div>
			<ul>
						<?php foreach($this->data['Services'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
					</ul>
		</div>
				<div class="block" id="c-187">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="list_post/<?php echo $this->data['Community'][0]['slug']; ?>"><strong>Community</strong></a> <small>(2,687)</small></h3></div></div><div class="bb"><div></div></div></div>
			<ul>
						<?php foreach($this->data['Community'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
					</ul>
		</div>
	</div>
	
	<!-- COLUMNA 3 -->
	<div class="column last">
			<div class="block" id="c-405">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="list_post/<?php echo $this->data['Matrimonial'][0]['slug']; ?>"><strong>Matrimonial</strong></a> <small>(8,135)</small></h3></div></div><div class="bb"><div></div></div></div>
							<ul>
										<?php foreach($this->data['Matrimonial'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
					</ul>
		</div>
				<div class="block" id="c-190">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="list_post/<?php echo $this->data['Jobs'][0]['slug']; ?>"><strong>Jobs</strong></a> <small>(123,564)</small></h3></div></div><div class="bb"><div></div></div></div>
							<ul>
										<?php foreach($this->data['Jobs'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
					</ul>
		</div>
				<div class="block" id="c-387">
			<div class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><h3 class="i3"><a href="list_post/<?php echo $this->data['Resumes'][0]['slug']; ?>"><strong>Job Wanted - Resumes</strong></a> <small>(8,722)</small></h3></div></div><div class="bb"><div></div></div></div>
			<ul>
										<?php foreach($this->data['Resumes'] as $forSale): ?>
						<li><a href="list_post/<?php echo $forSale['Category']['slug'];?>"><?php echo $forSale['Category']['name'];?></a></li>
					<?php endforeach; ?>
					</ul>
										  </div>
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
					<?php echo $form->select('city_id', $cities, null, array('selected' => $session->read('City.city')), 'Select a City'); ?>
					<?php echo $form->text('q', array('size'=>'30', 'id'=>'autoComplete')); ?>
					<?php echo $form->end('Go'); ?>
					
			</div>
<br>

</div>
<!-- END CountryOptions.mv -->				<p class="banner_mobile"><a href="http://www.olx.in/mobilepromopage.php?v=12">OLX Mobile<small>m.olx.in</small></a></p>
			<p class="banner_alerts"><a href="http://www.olx.in/nf/alerts.php" rel="nofollow">Email Alerts</a></p>
			<div class="post">
	<a href="http://www.olx.in/posting.php?src=9" rel="nofollow" class="button3"><span>Post a Free Classified</span></a>
</div>						
		</div></div></div><div class="bb"><div></div></div></div>
	</div>