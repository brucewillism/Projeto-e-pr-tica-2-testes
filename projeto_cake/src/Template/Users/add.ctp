<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="users view form large-5 medium-8 container content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Cadastro') ?></legend>
<div class="users form large-4 medium-7 container  content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Cadastrar') ?></legend>
        <?php
            echo $this->Form->control('name', ['label'=>'Nome']);
            echo $this->Form->control('username', ['label'=>'Usuario']);
            echo $this->Form->control('password',['label'=>'Senha']);
            echo $this->Form->control('email');           
            // echo $this->Form->control('health_units._ids', ['options' => $healthUnits]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
