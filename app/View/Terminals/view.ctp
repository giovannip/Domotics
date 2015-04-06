<h2><i class="fa fa-angle-right"></i> View Terminal</h2>

<div class="content-panel">
    <div class="col-lg-12">
        <br>

        <table class="table table-bordered table-striped table-condensed cf">
            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo h($terminal['Terminal']['id']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Name'); ?></td>
                <td><?php echo h($terminal['Terminal']['name']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Created'); ?></td>
                <td><?php echo h($terminal['Terminal']['created']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Modified'); ?></td>
                <td><?php echo h($terminal['Terminal']['modified']); ?></td>
            </tr>

            <tr>
                <td><?php echo __('Terminal Type'); ?></td>
                <td><?php echo $this->Html->link($terminal['TerminalType']['name'], array('controller' => 'terminal_types', 'action' => 'view', $terminal['TerminalType']['id'])); ?></td>
            </tr>
            
            <tr>
                <td><?php echo __('Mac Address'); ?></td>
                <td><?php echo h($terminal['Terminal']['mac_address']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('IP (Last)'); ?></td>
                <td><?php echo h($terminal['Terminal']['ip']); ?></td>
            </tr>
            
            <tr>
        </table>

    </div>

    <?php echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn btn-cancel')); ?>
</div>
<script type="text/javascript">
    $('#menu-terminals').addClass('active');
</script>