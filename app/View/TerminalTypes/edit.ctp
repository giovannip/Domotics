<div class="terminalTypes row">
<div class="actions span2">
	<ul class="nav nav-list">
        <li class="nav-header"><?php echo __('Actions'); ?></li>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TerminalType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TerminalType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Terminal Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Terminals'), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal'), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="terminalTypes span10">
<?php echo $this->Form->create('TerminalType', array('class' => 'form-horizontal'));?>
	<fieldset>
		<legend><?php echo __('Edit Terminal Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
		<div class="form-actions">
<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-primary','div'=>false));?>
<?php echo $this->Html->link(__('Cancel'),array('controller' => 'terminals', 'action' => 'index'),array('class'=>'btn btn-cancel'));?>
		</div>
		</fieldset>
<?php echo $this->Form->end();?>
</div>
</div>