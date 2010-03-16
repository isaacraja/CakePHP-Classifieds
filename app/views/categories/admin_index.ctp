        <div id="top-panel">
            <div id="panel">
						<ul>
							<li><?php echo $html->link(__('New Category', true), array('action'=>'add')); ?></li>
							<li><?php echo $html->link(__('List Category', true), array('controller'=> 'categories', 'action'=>'index')); ?> </li>
						</ul>
            </div>
      </div>
        <div id="wrapper">
            <div id="content">
     <div id="box">
       <h3>Category</h3>
          <table width="100%">
						<thead>
							<tr>
                               	
                                <th>Name</th>
																<th width="60px">Action</th>
                            </tr>
						</thead>
						<tbody>
					<?php foreach ($categories as $key => $value): ?>
						<tr>
							<td class="a-left"><?php echo $html->link(__($value, true), array('action'=>'edit', $key)); ?></td>
              <td>
								<?php echo $html->link(__('Edit', true), array('action'=>'edit', $key)); ?>
								<?php echo $html->link(__('Delete', true), array('action'=>'delete', $key), null, sprintf(__('Are you sure you want to delete # %s?', true), $key)); ?>
							</td>
         </tr>
				 <?php endforeach; ?>
						</tbody>
					</table>
                 
                </div>
            </div>
