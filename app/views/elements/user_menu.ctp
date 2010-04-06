<div id="sidebar" class="span-4 colborder">
	<h3>DashBoard</h3>
  <h4>Ads</h4>
	<ul>
		<li><?php echo $html->link('View Active Ads','/posts/active'); ?></li>
		<li><?php echo $html->link('View Inactive Ads','/posts/inactive'); ?></li>
		<li><?php echo $html->link('Add New Ad','/posts/add'); ?></li>	
  </ul>
<h4>Events</h4>	
	<ul>
	<li><?php echo $html->link('View Active Events','/events/active'); ?></li>
	<li><?php echo $html->link('View Inactive Events','/events/inactive'); ?></li>
	<li><?php echo $html->link('Add New Event','/events/add'); ?></li>	
  </ul>	
	<h4>Special Pages</h4>
	<ul>
	<li><?php echo $html->link('View Active Special Pages','/special_pages/active'); ?></li>
	<li><?php echo $html->link('View Inactive Special Pages','/special_pages/inactive'); ?></li>
	<li><?php echo $html->link('Add New Special pages','/special_pages/add'); ?></li>	
  </ul>
<h4>Profile</h4>
  <ul>
	<li><?php echo $html->link('Edit Profile','/profiles/edit'); ?></li>
	<li><?php echo $html->link('Change Password','/users/changepass'); ?></li>
	<li><?php echo $html->link('Logout','/users/logout'); ?></li>	
  </ul>	
		
</div>	
