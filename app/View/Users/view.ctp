<h2><i class="fa fa-angle-right"></i> View User</h2>

<div class="content-panel">
    <div class="col-lg-12">
        <br>

        <table class="table table-bordered table-striped table-condensed cf">
            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo h($user['User']['id']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Username'); ?></td>
                <td><?php echo h($user['User']['username']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Password'); ?></td>
                <td><?php echo h($user['User']['password']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Role'); ?></td>
                <td><?php echo h($user['User']['role']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Created'); ?></td>
                <td><?php echo h($user['User']['created']); ?></td>
            </tr>
            <tr>
                <td><?php echo __('Modified'); ?></td>
                <td><?php echo h($user['User']['modified']); ?></td>
            </tr>
            <tr>
        </table>

    </div>

    <?php echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn btn-cancel')); ?>
</div>
<script type="text/javascript"> 
    $('#menu-users').addClass('active');
</script>