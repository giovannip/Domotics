<div class="terminals index row">
<div class="actions span2">
	<ul class="nav nav-list">
        <li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Html->link(__('New Terminal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Terminal Types'), array('controller' => 'terminal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal Type'), array('controller' => 'terminal_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="span10">
	<h2><?php echo __('Terminals');?></h2>
	<table class="table table-condensed" style="white-space:nowrap;">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('terminal_type_id');?></th>
			<th><?php echo $this->Paginator->sort('mac_address');?></th>
			<th><?php echo $this->Paginator->sort('ip');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($terminals as $terminal): ?>
	<tr>
		<td><?php echo h($terminal['Terminal']['id']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['name']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['created']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($terminal['TerminalType']['name'], array('controller' => 'terminal_types', 'action' => 'view', $terminal['TerminalType']['id'])); ?>
		</td>
		<td><?php echo h($terminal['Terminal']['mac_address']); ?>&nbsp;</td>
		<td><?php echo h($terminal['Terminal']['ip']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $terminal['Terminal']['id']), array('class' => 'btn btn-mini')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $terminal['Terminal']['id']), array('class' => 'btn btn-mini')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $terminal['Terminal']['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $terminal['Terminal']['id'])); ?>
				</div>
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <div class="well">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</div>

	<div class="paging btn-group">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('next') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
	?>
	</div>
</div>
</div>

