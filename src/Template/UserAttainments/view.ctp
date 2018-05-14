<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAttainment $userAttainment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Attainment'), ['action' => 'edit', $userAttainment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Attainment'), ['action' => 'delete', $userAttainment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAttainment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Attainments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Attainment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userAttainments view large-9 medium-8 columns content">
    <h3><?= h($userAttainment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userAttainment->has('user') ? $this->Html->link($userAttainment->user->id, ['controller' => 'Users', 'action' => 'view', $userAttainment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Name') ?></th>
            <td><?= h($userAttainment->school_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= h($userAttainment->course) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year Graduated') ?></th>
            <td><?= h($userAttainment->year_graduated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userAttainment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Degree') ?></th>
            <td><?= $this->Number->format($userAttainment->degree) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Units') ?></th>
            <td><?= $this->Number->format($userAttainment->units) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userAttainment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userAttainment->modified) ?></td>
        </tr>
    </table>
</div>
