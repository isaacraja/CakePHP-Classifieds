        <div id="top-panel">
            <div id="panel">
                 <ul>
					<li><a href="users/add" class="useradd">Add user</a></li>
                    <li><a href="#" class="group">User groups</a></li>
            		<li><a href="#" class="search">Find user</a></li>
                    <li><a href="#" class="online">Users online</a></li>
                </ul>
            </div>
      </div>
        <div id="wrapper">
            <div id="content">
     <div id="box">
       <h3>Users</h3>
          <table width="100%">
						<thead>
							<tr>
                            	<th width="40px"><a href="#">ID<img src="img/icons/arrow_down_mini.gif" width="16" height="16" align="absmiddle" /></a></th>
                            	<th><a href="#">Full Name</a></th>
                                <th><a href="#">Email</a></th>
                                <th width="70px"><a href="#">Phone</a></th>
                                <th width="60px"><a href="#">Action</a></th>
                            </tr>
						</thead>
						<tbody>
					<?php foreach ($users as $user): ?>
						<tr>
							<td class="a-center"><?php echo $user['User']['id']; ?></td>
              <td><a href="#"><?php echo $user['User']['name']; ?></a></td>
              <td><?php echo $user['User']['email']; ?></td>
              <td><?php echo $user['User']['phone']; ?></td>
               <td><a href="users/view/<?php echo $user['User']['id']; ?>"><img src="<?php echo $this->webroot;?>img/admin/icons/user.png" title="View user" width="16" height="16" /></a><a href="users/edit/<?php echo $user['User']['id']; ?>"><img src="<?php echo $this->webroot;?>img/admin/icons/user_edit.png" title="Edit user" width="16" height="16" /></a><a href="users/delete/<?php echo $user['User']['id']; ?>"><img src="<?php echo $this->webroot;?>img/admin/icons/user_delete.png" title="Delete user" width="16" height="16" /></a></td>
         </tr>
				 <?php endforeach; ?>
						</tbody>
					</table>
                    <div id="pager">
                    	Page <a href="#"><img src="img/icons/arrow_left.gif" width="16" height="16" /></a> 
                    	<input size="1" value="1" type="text" name="page" id="page" /> 
                    	<a href="#"><img src="img/icons/arrow_right.gif" width="16" height="16" /></a>of 42
                    pages | View <select name="view">
                    				<option>10</option>
                                    <option>20</option>
                                    <option>50</option>
                                    <option>100</option>
                    			</select> 
                    per page | Total <strong>420</strong> records found
                    </div>
                </div>
            </div>
