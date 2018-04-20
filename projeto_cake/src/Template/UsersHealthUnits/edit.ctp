<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersHealthUnit $usersHealthUnit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersHealthUnit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersHealthUnit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Health Units'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersHealthUnits form large-9 medium-8 columns content">
    <?= $this->Form->create($usersHealthUnit) ?>
    <fieldset>
        <legend><?= __('Edit Users Health Unit') ?></legend>
        <?php
            echo $this->Form->control('health_unit_id', ['options' => $healthUnits]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
