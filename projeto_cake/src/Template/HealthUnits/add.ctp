<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
    
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="healthUnits form large-9 medium-8 columns content">
    <?= $this->Form->create($healthUnit) ?>
    <fieldset>
        <legend><?= __('Add Health Unit') ?></legend>
        <?= $this->Form->control('name'); ?>
            <?= $this->Form->control('telephone') ?>
            <?= $this->Form->control('CEP') ?>
            
            <label for="rua">Rua</label>
            <input type="text" name="rua" id="rua"><br>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade"><br>
            <label for="uf">Estado</label>
            <input type="text" name="uf" id="uf"><br>
            <label for="numero">Número</label id="numero">
            <input type="text" name="numero"><br>
            
            <?= $this->Form->control('complete_address') ?>
            <?= $this->Form->control('latitude',["readonly"=>"readonly","class"=>"esconder"]) ?>
            <?= $this->Form->control('longitude',["readonly"=>"readonly","class"=>"esconder"]) ?>

            <!-- <?= $this->Form->control('users._ids', ['options' => $users,'label'=>"administrador"]) ?> -->
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
