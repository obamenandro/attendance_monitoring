<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserChecklist $userChecklist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Checklist'), ['action' => 'edit', $userChecklist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Checklist'), ['action' => 'delete', $userChecklist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userChecklist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Checklists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Checklist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userChecklists view large-9 medium-8 columns content">
    <h3><?= h($userChecklist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userChecklist->has('user') ? $this->Html->link($userChecklist->user->id, ['controller' => 'Users', 'action' => 'view', $userChecklist->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userChecklist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requirement Id') ?></th>
            <td><?= $this->Number->format($userChecklist->requirement_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userChecklist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userChecklist->modified) ?></td>
        </tr>
    </table>
</div>
