<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>
<?= $this->Html->script("cadastro.js") ?>
<?= $this->Html->script("cadastro-lat-lng.js") ?>
<?= $this->fetch("script")?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="healthUnits form large-6 medium-8 container content">
    <?= $this->Form->create($healthUnit) ?>
    <fieldset>
        <legend><?= __('Add') ?></legend>
        <?= $this->Form->control('name', ['label'=>'Nome']); ?>
            <?= $this->Form->control('telephone', ['label'=>'Telefone']) ?>
            <?= $this->Form->control('CEP') ?>
            
            <label for="rua">Rua</label>
            <input type="text" name="rua" id="rua" disabled="true"><br>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" disabled="true"><br>
            <label for="uf">Estado</label>
            <input type="text" name="uf" id="uf" disabled="true"><br>
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" disabled="true"><br>
            
            <?= $this->Form->control('complete_address',["id"=>"complet","readonly"=>"readonly"]) ?>
            <?= $this->Form->control('latitude',["readonly"=>"readonly","class"=>"esconder","id"=>"latitude"]) ?>
            <?= $this->Form->control('longitude',["readonly"=>"readonly","class"=>"esconder","id"=>"longitude"]) ?>

            <!-- <?= $this->Form->control('users._ids', ['options' => $users,'label'=>"administrador"]) ?> -->
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
