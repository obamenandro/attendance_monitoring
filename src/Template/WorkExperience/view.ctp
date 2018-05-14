<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkExperience $workExperience
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Work Experience'), ['action' => 'edit', $workExperience->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Work Experience'), ['action' => 'delete', $workExperience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workExperience->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Work Experience'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work Experience'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="workExperience view large-9 medium-8 columns content">
    <h3><?= h($workExperience->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $workExperience->has('user') ? $this->Html->link($workExperience->user->id, ['controller' => 'Users', 'action' => 'view', $workExperience->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Work') ?></th>
            <td><?= h($workExperience->start_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Work') ?></th>
            <td><?= h($workExperience->end_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= h($workExperience->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($workExperience->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($workExperience->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($workExperience->modified) ?></td>
        </tr>
    </table>
</div>
