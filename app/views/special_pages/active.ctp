<?php echo $this->element('user_menu', array('cache'=>'+1 hour')); ?>
<div id="home" class="span-19 last">
       <h3>Active SpecialPages</h3>
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
					<?php foreach ($special_pages as $special_page): ?>
						<tr>
							<td class="a-center"><?php echo $special_page['SpecialPage']['id']; ?></td>
              <td><a href="#"><?php echo $special_page['SpecialPage']['product_offered']; ?></a></td>
              <td><?php echo $special_page['SpecialPage']['created']; ?></td>
              <td><?php echo $special_page['SpecialPage']['modified']; ?></td>
              <td>
								<?php echo $html->link(__('View', true), array('action'=>'view', $special_page['SpecialPage']['id'])); ?>
								<?php echo $html->link(__('Edit', true), array('action'=>'edit', $special_page['SpecialPage']['id'])); ?>
								<?php echo $html->link(__('Delete', true), array('action'=>'delete', $special_page['SpecialPage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $special_page['SpecialPage']['id'])); ?>
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