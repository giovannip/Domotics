<h2><i class="fa fa-angle-right"></i> View Terminal Type</h2>

<div class="content-panel">
    <div class="col-lg-12">
        <br>

        <table class="table table-bordered table-striped table-condensed cf">
            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo h($terminalType['TerminalType']['id']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Name'); ?></td>
                <td><?php echo h($terminalType['TerminalType']['name']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Created'); ?></td>
                <td><?php echo h($terminalType['TerminalType']['created']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Modified'); ?></td>
                <td><?php echo h($terminalType['TerminalType']['modified']); ?></td>
            </tr>
            <tr>
        </table>

    </div>

    <?php echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn btn-cancel')); ?>
</div>
<script type="text/javascript"> 
    $('#menu-terminalTypes').addClass('active');
</script>