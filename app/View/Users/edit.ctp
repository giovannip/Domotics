<h2><i class="fa fa-angle-right"></i> Edit User</h2>
<div class="form-panel">
    <?php echo $this->Form->create('User', array('class' => 'form-horizontal style-form')); ?>

    <?php
    echo $this->Form->input('id');
    ?>
    <div class="form-group">
        <?php
        echo $this->Form->input('username', array('class' => 'form-control', 'label' => array('class' => 'col-sm-2'), 'div' => array('class' => 'col-sm-2')));
        ?>
    </div>
    <div class="form-group">
        <?php
        echo $this->Form->input('password', array('class' => 'form-control', 'label' => array('class' => 'col-sm-2'), 'div' => array('class' => 'col-sm-2')));
        ?>
    </div>
    <div class="form-group">
        <?php
        echo $this->Form->input('role', array('class' => 'form-control', 'label' => array('class' => 'col-sm-2'), 'div' => array('class' => 'col-sm-2')));
        ?>
    </div>
    <div class="form-group">
        <div class="col-sm-4">
            <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-primary', 'div' => false)); ?>
            <?php echo $this->Html->link(__('Cancel'), array('action' => 'index'), array('class' => 'btn btn-cancel')); ?>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>