        <div id="top-panel">
            <div id="panel">
						<ul>
							<li><?php echo $html->link(__('New Newsletter', true), array('action'=>'add')); ?></li>
							<li><?php echo $html->link(__('List Newsletter', true), array('controller'=> 'newsletters', 'action'=>'index')); ?> </li>
						</ul>
            </div>
      </div>
        <div id="wrapper">
            <div id="content">
     <div id="box">
       <h3>Newsletters</h3>
          <table width="100%">
						<thead>
							<tr>
                               	<th><?php echo $paginator->sort('id');?></th>
                                <th><?php echo $paginator->sort('title');?></th>
                                <th width="70px"><?php echo $paginator->sort('created');?></th>
                                <th width="60px"><?php echo $paginator->sort('modified');?></th>
																<th width="60px">Action</th>
                            </tr>
						</thead>
						<tbody>
					<?php foreach ($newsletters as $newsletter): ?>
						<tr>
							<td class="a-center"><?php echo $newsletter['Newsletter']['id']; ?></td>
              <td><a href="#"><?php echo $newsletter['Newsletter']['title']; ?></a></td>
              <td><?php echo $newsletter['Newsletter']['created']; ?></td>
              <td><?php echo $newsletter['Newsletter']['modified']; ?></td>
              <td>
								<?php echo $html->link(__('View', true), array('action'=>'view', $newsletter['Newsletter']['id'])); ?>
								<?php echo $html->link(__('Edit', true), array('action'=>'edit', $newsletter['Newsletter']['id'])); ?>
								<?php echo $html->link(__('Delete', true), array('action'=>'delete', $newsletter['Newsletter']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $newsletter['Newsletter']['id'])); ?>
							</td>
         </tr>
				 <?php endforeach; ?>
						</tbody>
					</table>
                    <div class="paging" id="pager">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
                </div>
            </div>
