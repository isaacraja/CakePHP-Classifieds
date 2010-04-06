<div id="home">
	<!-- COLUMNA 1 -->
	<div id="ssome">
	<ul id="the-list">
			<li>
			<div class="row clearfix">
				<div class="c-1">
				<a href="http://bangalore.olx.in/pug-pups-for-sale-show-quality-sire-american-thai-champion-iid-32794625">
						<img height="76" width="90" alt="<?php echo $this->data['Post']['title'];?>" src="<?php echo $this->data['Post']['title'];?>"/>
					</a>				</div>
				<div class="c-2">
					<h3>
						<a title="<?php echo $this->data['Post']['title'];	?>" href="http://bangalore.olx.in/pug-pups-for-sale-show-quality-sire-american-thai-champion-iid-32794625">
							<?php echo $this->data['Post']['title'];	?></a>
					</h3>
					<p><?php echo $this->data['Post']['description'];	?></p>
				</div>
				<div class="c-3">Rs <?php echo $this->data['Post']['price'];	?></div>
			</div>
		</li>
		</ul>
	</div>
</div>

<div id="home-extras" class="cb"><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">
			<!-- CountryOptions.mv -->
<div class="block">
	<h3>DashBoard</h3>
		</div></div>
		<ul>
		<li><?php echo $html->link('View Active Ads','/users/dashboard'); ?></li>
		<li><?php echo $html->link('View inactive Ads','/posts/add'); ?></li>
		<li><?php echo $html->link('Add New Ad','/posts/add'); ?></li>		
		<li><?php echo $html->link('Edit Profile','/users/edit'); ?></li>
		<li><?php echo $html->link('Logout','/users/logout'); ?></li>
	  </ul>
		</div><div class="bb"><div></div></div></div>
	</div>
</div>	