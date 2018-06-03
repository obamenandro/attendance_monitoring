<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seminar $seminar
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Seminars'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="seminars form large-9 medium-8 columns content">
    <?= $this->Form->create($seminar) ?>
    <fieldset>
        <legend><?= __('Add Seminar') ?></legend>
        <?php
            echo $this->Form->control('attended');
            echo $this->Form->control('user_id');
            echo $this->Form->control('conducted_by');
            echo $this->Form->control('date');
            echo $this->Form->control('del_flg');
            echo $this->Form->control('deleted_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
