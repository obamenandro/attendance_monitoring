<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserEligibility[]|\Cake\Collection\CollectionInterface $userEligibilities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Eligibility'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userEligibilities index large-9 medium-8 columns content">
    <h3><?= __('User Eligibilities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exam_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('license_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valid_until') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userEligibilities as $userEligibility): ?>
            <tr>
                <td><?= $this->Number->format($userEligibility->id) ?></td>
                <td><?= $userEligibility->has('user') ? $this->Html->link($userEligibility->user->id, ['controller' => 'Users', 'action' => 'view', $userEligibility->user->id]) : '' ?></td>
                <td><?= h($userEligibility->exam_name) ?></td>
                <td><?= $this->Number->format($userEligibility->license_no) ?></td>
                <td><?= h($userEligibility->valid_until) ?></td>
                <td><?= h($userEligibility->created) ?></td>
                <td><?= h($userEligibility->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userEligibility->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userEligibility->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userEligibility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userEligibility->id)]) ?>
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
