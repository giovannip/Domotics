<div class="terminals view row">
	<div class="actions span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link(__('Edit Terminal'), array('action' => 'edit', $terminal['Terminal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Terminal'), array('action' => 'delete', $terminal['Terminal']['id']), null, __('Are you sure you want to delete # %s?', $terminal['Terminal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminal Types'), array('controller' => 'terminal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal Type'), array('controller' => 'terminal_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<div class="span10">
		<h2><?php  echo __('Terminal');?></h2>
		<dl>
					<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terminal Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($terminal['TerminalType']['name'], array('controller' => 'terminal_types', 'action' => 'view', $terminal['TerminalType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mac Address'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['mac_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['ip']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>
