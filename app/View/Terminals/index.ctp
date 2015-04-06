<h2><i class="fa fa-angle-right"></i> Terminals</h2>
<div class="content-panel">
    <div class="col-lg-12">
        <br>
        <table class="table table-bordered table-striped table-condensed cf">
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('terminal_type_id'); ?></th>
                <th><?php echo $this->Paginator->sort('mac_address'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($terminals as $terminal): ?>
                <tr>
                    <td><?php echo h($terminal['Terminal']['id']); ?>&nbsp;</td>
                    <td><?php echo h($terminal['Terminal']['name']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($terminal['TerminalType']['name'], array('controller' => 'terminal_types', 'action' => 'view', $terminal['TerminalType']['id'])); ?>
                    </td>
                    <td><?php echo h($terminal['Terminal']['mac_address']); ?>&nbsp;</td>
                    <td class="actions">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <?php echo $this->Html->link(__('V'), array('action' => 'view', $terminal['Terminal']['id']), array('class' => 'btn btn-info  btn-sm')); ?>
                                <?php echo $this->Html->link(__('E'), array('action' => 'edit', $terminal['Terminal']['id']), array('class' => 'btn btn-success  btn-sm')); ?>
                                <?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $terminal['Terminal']['id']), array('class' => 'btn btn-danger  btn-sm'), __('Are you sure you want to delete "%s"?', $terminal['Terminal']['name'])); ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="well">
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	
    </div>

    <div class="paging btn-group">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
        echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
        echo $this->Paginator->next(__('next') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
        ?>
    </div>

</div>
<script type="text/javascript">
    $('#menu-terminals').addClass('active');
    $('#menu-terminals-list').addClass('active');
</script>