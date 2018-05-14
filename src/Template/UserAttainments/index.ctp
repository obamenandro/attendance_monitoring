<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAttainment[]|\Cake\Collection\CollectionInterface $userAttainments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Attainment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userAttainments index large-9 medium-8 columns content">
    <h3><?= __('User Attainments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('degree') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('units') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year_graduated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userAttainments as $userAttainment): ?>
            <tr>
                <td><?= $this->Number->format($userAttainment->id) ?></td>
                <td><?= $userAttainment->has('user') ? $this->Html->link($userAttainment->user->id, ['controller' => 'Users', 'action' => 'view', $userAttainment->user->id]) : '' ?></td>
                <td><?= $this->Number->format($userAttainment->degree) ?></td>
                <td><?= h($userAttainment->school_name) ?></td>
                <td><?= $this->Number->format($userAttainment->units) ?></td>
                <td><?= h($userAttainment->course) ?></td>
                <td><?= h($userAttainment->year_graduated) ?></td>
                <td><?= h($userAttainment->created) ?></td>
                <td><?= h($userAttainment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userAttainment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAttainment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userAttainment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAttainment->id)]) ?>
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
