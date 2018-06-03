<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seminar $seminar
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seminar'), ['action' => 'edit', $seminar->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seminar'), ['action' => 'delete', $seminar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seminar->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seminars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seminar'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seminars view large-9 medium-8 columns content">
    <h3><?= h($seminar->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Attended') ?></th>
            <td><?= h($seminar->attended) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conducted By') ?></th>
            <td><?= h($seminar->conducted_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($seminar->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($seminar->deleted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($seminar->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($seminar->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Del Flg') ?></th>
            <td><?= $this->Number->format($seminar->del_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($seminar->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($seminar->modified) ?></td>
        </tr>
    </table>
</div>
