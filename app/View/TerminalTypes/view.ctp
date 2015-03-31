<div class="terminalTypes view row">
	<div class="actions span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link(__('Edit Terminal Type'), array('action' => 'edit', $terminalType['TerminalType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Terminal Type'), array('action' => 'delete', $terminalType['TerminalType']['id']), null, __('Are you sure you want to delete # %s?', $terminalType['TerminalType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminal Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals'), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal'), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<div class="span10">
		<h2><?php  echo __('Terminal Type');?></h2>
		<dl>
					<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($terminalType['TerminalType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($terminalType['TerminalType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($terminalType['TerminalType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($terminalType['TerminalType']['modified']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>
	<div class="row">
		<div class="related span10 offset2">
			<hr>
			<h3><?php echo __('Related Terminals');?></h3>
			<div class="btn-toolbar">
			<?php echo $this->Html->link(__('New Terminal'), array('controller' => 'terminals', 'action' => 'add'), array('class'=>'btn btn-mini'));?>			</div>
	<?php if (!empty($terminalType['Terminal'])):?>
			<table class="table">
				<tr>
							<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Terminal Type Id'); ?></th>
		<th><?php echo __('Mac Address'); ?></th>
		<th><?php echo __('Ip'); ?></th>
					<th class="actions"><?php echo __('Actions');?></th>
				</tr>
					<?php
		$i = 0;
		foreach ($terminalType['Terminal'] as $terminal): ?>
		<tr>
			<td><?php echo $terminal['id'];?></td>
			<td><?php echo $terminal['name'];?></td>
			<td><?php echo $terminal['created'];?></td>
			<td><?php echo $terminal['modified'];?></td>
			<td><?php echo $terminal['terminal_type_id'];?></td>
			<td><?php echo $terminal['mac_address'];?></td>
			<td><?php echo $terminal['ip'];?></td>
			<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'terminals', 'action' => 'view', $terminal['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'terminals', 'action' => 'edit', $terminal['id']), array('class' => 'btn btn-mini')); ?>
				</div>
				<div class="btn-group">
				<?php echo $this->Html->link(__('Delete'), array('controller' => 'terminals', 'action' => 'delete', $terminal['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $terminal['id'])); ?>
				</div>
			</div>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
	<?php endif; ?>

		</div>
	</div>
