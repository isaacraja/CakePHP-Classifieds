<?php $categories = $this->requestAction('/categories/get_categories');?>
<div id="header-search" class="span-14">
<?php echo $form->create('Category', array('action' => 'list_post','type' => 'get')); ?>
    <div class="search-options-text-div">
					<?php echo $form->input('keyw',array('div' => false, 'label' => false,'class' => 'search-option-text')); ?>
					<?php echo $form->select('cat', $categories, null, array('class' => 'search-option-select'), 'Entire Site'); ?>
		</div>
					<!-- <?php echo $form->text('q', array('size'=>'10', 'id'=>'autoComplete')); ?> -->
<?php echo $form->submit('button_findit.gif',array('div' => false)); ?>
<?php echo $form->end(); ?>
</div>
