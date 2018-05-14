<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserEligibility $userEligibility
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Eligibility'), ['action' => 'edit', $userEligibility->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Eligibility'), ['action' => 'delete', $userEligibility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userEligibility->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Eligibilities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Eligibility'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userEligibilities view large-9 medium-8 columns content">
    <h3><?= h($userEligibility->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userEligibility->has('user') ? $this->Html->link($userEligibility->user->id, ['controller' => 'Users', 'action' => 'view', $userEligibility->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exam Name') ?></th>
            <td><?= h($userEligibility->exam_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valid Until') ?></th>
            <td><?= h($userEligibility->valid_until) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userEligibility->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('License No') ?></th>
            <td><?= $this->Number->format($userEligibility->license_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userEligibility->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userEligibility->modified) ?></td>
        </tr>
    </table>
</div>
