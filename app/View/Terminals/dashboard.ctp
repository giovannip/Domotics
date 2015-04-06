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
<div class="row mt">
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Custom Toggles</h4>


                <div class="switch has-switch">
                    <div class="switch-animate switch-on">
                        <input type="checkbox" checked="" data-toggle="switch">
                        <span class="switch-left">ON</span>

                        <span class="switch-right">OFF</span>
                    </div>
                </div>
                <div class="switch has-switch">
                    <div class="switch-animate switch-on">
                        <input type="checkbox" checked="" data-toggle="switch">
                        <span class="switch-left">ON</span>

                        <span class="switch-right">OFF</span>
                    </div>
                </div>
                <div class="switch has-switch">
                    <div class="switch-animate switch-on">
                        <input type="checkbox" checked="" data-toggle="switch">
                        <span class="switch-left">ON</span>

                        <span class="switch-right">OFF</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>