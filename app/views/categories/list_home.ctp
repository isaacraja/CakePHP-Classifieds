<?php
$javascript->link('jquery/jquery.min', false);
$javascript->link('jquery/plugins/jquery.autocomplete', false);

$javascript->link('autocompleteAction2', false);

?>
<?php echo $html->css('jquery.autocomplete', false); ?>
<div class="span-5">
  			<?php //echo $form->create('Category', array('action' => 'set_city')); ?>
					<?php //echo $form->select('city_id', $cities, null, array('selected' => $session->read('City.city')), 'Select a City'); ?>
					<?php //echo $form->text('city_id', array('size'=>'10', 'id'=>'autoComplete','value' => $session->read('City.city'))); ?>
					<?php //echo $form->end('Go'); ?>
<div class="left-menu-box" id="filter-options">
<div class="left-menu-header">
<h3>Filter by</h3>
</div>
<div class="filter-option">
<h4>Category</h4>
<ul id="narrow-category">
<ul id="expanded-category">
<li>
<a href="/vehicle/airplane/">Airplanes</a>
<span class="navigator-count">(5)</span></li>
<li>
<a href="/vehicle/boat/">Boats</a>
<span class="navigator-count">(20)</span></li>
<li>
<a href="/vehicle/car/">Cars</a>
<span class="navigator-count">(23,967)</span></li>
<li>
<a href="/vehicle/commercial_truck/">Commercial Trucks</a>
<span class="navigator-count">(33)</span></li>
 <li>
<a rel="nofollow" href="/vehicle/other/">Everything Else</a>
<span class="navigator-count">(457)</span></li>
<li>
<a href="/vehicle/heavy_equipment/">Heavy Equipment</a>
<span class="navigator-count">(6)</span></li>
<li>
<a href="/vehicle/motorcycle/">Motorcycles</a>
<span class="navigator-count">(3,169)</span></li>
<li>
<a href="/vehicle/parts/">Parts & Accessories</a>
<span class="navigator-count">(614)</span></li>
<li>
<a href="/vehicle/powersports/">Power Sports</a>
<span class="navigator-count">(6)</span></li>
<li>
<a href="/vehicle/rv/">RVs</a>
<span class="navigator-count">(70)</span></li>
</ul>
</ul><!--/narrow-category-->
</div><!--/narrow-option-->

<div class="filter-option">
<h4>Price</h4>
<ul id="narrow-price">

<fieldset class="clearfix">
<input type="text" onblur="replace_text(this, 'Low', 'blur')" onfocus="remove_text(this, 'Low', 'blur')" maxsize="9" size="8" value="Low" name="from_price" id="from_price" class="input input-range blur"/>
<span class="input-range-delimiter">to</span>
<input type="text" onblur="replace_text(this, 'High', 'blur')" onfocus="remove_text(this, 'High', 'blur')" maxsize="9" size="8" value="High" name="to_price" id="to_price" class="input input-range blur"/>
<input type="image" class="submit-arrows" src="http://i.oodleimg.com/partners/oodle/a/desite/button_twoarrows.gif"/>
</fieldset>
</ul><!--/narrow-price-->
</div><!--/narrow-option-->



<div class="filter-option">
<h4>Filter By Keyword</h4>
<ul id="narrow-refine">
<fieldset class="clearfix">
<input type="text" maxsize="128" size="15" value="" name="refine" class="input input-text"/>
<input type="image" class="submit-arrows" src="http://i.oodleimg.com/partners/oodle/a/desite/button_twoarrows.gif"/>
</fieldset>
</ul><!--/narrow-refine-->
</div><!--/narrow-option-->
</div>
</div>

<div class="span-19 last">
  <div class="span-5 box">
	<h3><a href="list_post/<?php echo $this->data['ForSale'][0]['slug']; ?>"><strong>For Sale</strong></a></h3>
	<ul>
				<?php foreach($this->data['ForSale'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
			</ul>
	<h3 class="i3"><a href="http://www.olx.in/classes-cat-186"><strong>Classes</strong></a> <small>(14,992)</small></h3>		
		<ul>
						<?php foreach($this->data['Classes'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
					</ul>	
	</div>
	<div class="span-5 box">
	<h3 class="i3"><a href="list_post/<?php echo $this->data['Vehicles'][0]['slug']; ?>"><strong>Vehicles</strong></a> <small></small></h3>
		<ul>
						<?php foreach($this->data['Vehicles'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
			</ul>
		<h3 class="i3"><a href="list_post/<?php echo $this->data['RealEstate'][0]['slug']; ?>"><strong>Real Estate</strong></a> <small></small></h3>	
			<ul>
						<?php foreach($this->data['RealEstate'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
					</ul>
				<h3 class="i3"><a href="list_post/<?php echo $this->data['Services'][0]['slug']; ?>"><strong>Services</strong></a> <small>(29,007)</small></h3>	
				<ul>
						<?php foreach($this->data['Services'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
			</ul>	
		<h3 class="i3"><a href="list_post/<?php echo $this->data['Community'][0]['slug']; ?>"><strong>Community</strong></a> <small>(2,687)</small></h3>	
			<ul>
						<?php foreach($this->data['Community'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
				</ul>
	</div>
	<div class="span-5 box last">
	<h3 class="i3"><a href="list_post/<?php echo $this->data['Matrimonial'][0]['slug']; ?>"><strong>Matrimonial</strong></a> <small>(8,135)</small></h3>
		<ul>
						<?php foreach($this->data['Matrimonial'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
					</ul>
					<h3 class="i3"><a href="list_post/<?php echo $this->data['Jobs'][0]['slug']; ?>"><strong>Jobs</strong></a> <small>(123,564)</small></h3>
			<ul>
										<?php foreach($this->data['Jobs'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
					</ul>
				<h3 class="i3"><a href="list_post/<?php echo $this->data['Resumes'][0]['slug']; ?>"><strong>Job Wanted - Resumes</strong></a> <small>(8,722)</small></h3>	
<ul>
										<?php foreach($this->data['Resumes'] as $forSale): ?>
						<li><?php echo $html->link(__($forSale['Category']['name'], true), array('controller'=> 'categories', 'action'=>'list_post',$forSale['Category']['slug'])); ?></li>
					<?php endforeach; ?>
					</ul>					
	</div>
</div>	
