<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAttainment $userAttainment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Attainments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userAttainments form large-9 medium-8 columns content">
    <?= $this->Form->create($userAttainment) ?>
    <fieldset>
        <legend><?= __('Add User Attainment') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('degree');
            echo $this->Form->control('school_name');
            echo $this->Form->control('units');
            echo $this->Form->control('course');
            echo $this->Form->control('year_graduated');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
