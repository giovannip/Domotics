<h3><i class="fa fa-angle-right"></i> <?php echo __('Users'); ?></h3>
<div class="row mt">
    <div class="col-lg-12">
        <div class="content-panel">
            <section id="no-more-tables">
                <table class="table table-striped table-advance table-hover">
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('username'); ?></th>
                        <th><?php echo $this->Paginator->sort('password'); ?></th>
                        <th><?php echo $this->Paginator->sort('role'); ?></th>
                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                        <th><?php echo $this->Paginator->sort('modified'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['password']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['role']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
                            <td class="actions">
                                <div class="btn-toolbar">
                                    <div class="btn-group">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-info  btn-sm')); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-success  btn-sm')); ?>
                                        <?php echo $this->Form->postLink(__('Del'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-danger  btn-sm'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </section>
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
</div>

