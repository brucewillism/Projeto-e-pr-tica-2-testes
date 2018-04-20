<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersHealthUnit $usersHealthUnit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Health Unit'), ['action' => 'edit', $usersHealthUnit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Health Unit'), ['action' => 'delete', $usersHealthUnit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersHealthUnit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Health Units'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Health Unit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersHealthUnits view large-9 medium-8 columns content">
    <h3><?= h($usersHealthUnit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Health Unit') ?></th>
            <td><?= $usersHealthUnit->has('health_unit') ? $this->Html->link($usersHealthUnit->health_unit->name, ['controller' => 'HealthUnits', 'action' => 'view', $usersHealthUnit->health_unit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersHealthUnit->has('user') ? $this->Html->link($usersHealthUnit->user->name, ['controller' => 'Users', 'action' => 'view', $usersHealthUnit->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersHealthUnit->id) ?></td>
        </tr>
    </table>
</div>
