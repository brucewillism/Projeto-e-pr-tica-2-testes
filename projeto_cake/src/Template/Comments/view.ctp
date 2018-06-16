<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment $comment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comments view large-9 medium-8 columns content">
    <h3><?= h($comment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Content') ?></th>
            <td><?= h($comment->content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Health Unit') ?></th>
            <td><?= $comment->has('health_unit') ? $this->Html->link($comment->health_unit->name, ['controller' => 'HealthUnits', 'action' => 'view', $comment->health_unit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= h($comment->author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($comment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($comment->data) ?></td>
        </tr>
    </table>
</div>
