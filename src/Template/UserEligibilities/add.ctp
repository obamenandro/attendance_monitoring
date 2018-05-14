<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserEligibility $userEligibility
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Eligibilities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userEligibilities form large-9 medium-8 columns content">
    <?= $this->Form->create($userEligibility) ?>
    <fieldset>
        <legend><?= __('Add User Eligibility') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('exam_name');
            echo $this->Form->control('license_no');
            echo $this->Form->control('valid_until');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
