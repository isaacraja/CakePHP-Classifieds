<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>	
<div id="home" class="span-20 last">
	<h3>Active Ads </h3>
	<table>
						<thead>
							<tr>
              	<th width="40px"><a href="#">ID<img height="16" align="absmiddle" width="16" src="img/icons/arrow_down_mini.gif"/></a></th>
                            	<th><a href="#">Title</a></th>
                                <th><a href="#">Price</a></th>
                                <th width="70px"><a href="#">Expiry</a></th>
                                <th width="60px"><a href="#">Action</a></th>
                            </tr>
						</thead>
						
						<tbody>
						<?php foreach ($data as $data):?> 
						<tr>
							<td class="a-center"><?php echo $data['Post']['id'];?></td>
              <td><a href="#"><?php echo $data['Post']['title'];?></a></td>
              <td><?php echo $data['Post']['price'];?></td>
              <td>1234567890</td>
               <td>
							 <?php echo $html->image("admin/icons/user.png", array("alt" => "View User",'url' => array('controller' => 'posts', 'action' => 'view', $data['Post']['id']))); ?>
							 <?php echo $html->image("admin/icons/user_edit.png", array("alt" => "Edit User",'url' => array('controller' => 'posts', 'action' => 'edit', $data['Post']['id']))); ?>
							 <?php echo $html->image("admin/icons/user_delete.png", array("alt" => "Delete User",'url' => array('controller' => 'posts', 'action' => 'delete', $data['Post']['id']))); ?>
					</td>
         </tr>
				 <?php endforeach; ?>
				 </tbody>
					</table>
</div>	

