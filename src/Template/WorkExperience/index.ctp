<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkExperience[]|\Cake\Collection\CollectionInterface $workExperience
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Work Experience'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="workExperience index large-9 medium-8 columns content">
    <h3><?= __('Work Experience') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_work') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_work') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($workExperience as $workExperience): ?>
            <tr>
                <td><?= $this->Number->format($workExperience->id) ?></td>
                <td><?= $workExperience->has('user') ? $this->Html->link($workExperience->user->id, ['controller' => 'Users', 'action' => 'view', $workExperience->user->id]) : '' ?></td>
                <td><?= h($workExperience->start_work) ?></td>
                <td><?= h($workExperience->end_work) ?></td>
                <td><?= h($workExperience->position) ?></td>
                <td><?= h($workExperience->created) ?></td>
                <td><?= h($workExperience->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $workExperience->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $workExperience->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $workExperience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workExperience->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
