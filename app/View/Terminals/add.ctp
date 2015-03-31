<div class="terminals row">
<div class="actions span2">
	<ul class="nav nav-list">
        <li class="nav-header"><?php echo __('Actions'); ?></li>

		<li><?php echo $this->Html->link(__('List Terminals'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Terminal Types'), array('controller' => 'terminal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal Type'), array('controller' => 'terminal_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="terminals span10">
<?php echo $this->Form->create('Terminal', array('class' => 'form-horizontal'));?>
	<fieldset>
		<legend><?php echo __('Add Terminal'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('terminal_type_id');
		echo $this->Form->input('mac_address');
		echo $this->Form->input('ip');
	?>
		<div class="form-actions">
<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-primary','div'=>false));?>
<?php echo $this->Html->link(__('Cancel'),array('controller' => 'terminal_types', 'action' => 'index'),array('class'=>'btn btn-cancel'));?>
		</div>
		</fieldset>
<?php echo $this->Form->end();?>
</div>
</div>