<?php
$javascript->link('jquery/jquery.min', false);
$javascript->link('jquery/plugins/jquery.autocomplete', false);

$javascript->link('autocompleteAction', false);

?>
<?php echo $html->css('jquery.autocomplete', false); ?>
<div class="span-5">
 
  			<?php //echo $form->create('Category', array('action' => 'set_city')); ?>
					<?php //echo $form->select('city_id', $cities, null, array('selected' => $session->read('City.city')), 'Select a City'); ?>
					<?php //echo $form->text('q', array('size'=>'10', 'id'=>'autoComplete')); ?>
					<?php //echo $form->end('Go'); ?>
					<?php //echo $html->link('Links',$this->passedArgs); ?>
					
<!--> <?php //if(!empty($children)): ?>
 <h3>Categories</h3>
				<?php	//foreach ($children as $children): ?>
					<ul>
					<li><?php //echo $html->link($children['Category']['name'] , 'list_post/'.$children['Category']['slug']); ?></li>
					</ul>
				<?php //endforeach; ?>		
<?php //endif; ?> -->
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
			

<div id="content-center" class="span-15 last">

<div id="listings-submenu" class="left-menu-header">
Results <strong>1</strong> - <strong>25</strong> of <strong>28,433</strong>
</div>



	<div id="the-list">
	<?php foreach ($data as $data):?> 
			<div id="post-item">
			
			<div id="post-item-thumbnail">
			<?php echo $html->image(isset($data['Image'][0]['filename'])?'posts/'.$data['Image'][0]['filename']:'posts/nothumb.gif'); ?>
			</div>
			
			<div id="post-item-details">
			<h3><?php echo $html->link($data['Post']['title'] , '/posts/display/'.$data['Post']['slug']); ?></h3>
			<h3><span class="price"><?php echo $number->currency($data['Post']['price'], 'Rs.');	?></span></h3>
			  <?php //echo $data['Post']['description'];	?>
			  <div class="user-place-time">
			  <?php echo $data['User']['name'].' - '.$data['City']['city'].' 16 hours ago'; ?>
			  </div>
			  <div class="excerpt">
			    <?php echo $text->excerpt($data['Post']['description'], 'method', 100); ?> 
			  </div>
			  <div class="actions">
			  Share | Details | Report
			  </div>
			 </div> 
		 
    </div>
		  <hr />
		<?php endforeach; ?>
	</div>	
		<?php $paginator->options(array('url' => $this->passedArgs)); ?>
		<?php echo $paginator->prev('<< Previous', null, null, array('class' => 'enabled')); ?>
		<?php echo $paginator->numbers(); ?>
		<?php	echo $paginator->next('Next >>', null, null, array('class' => 'enabled')); ?> 
</div>
	
