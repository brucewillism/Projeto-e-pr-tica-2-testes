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
<center>
<div class="users view form large-5 medium-8 container content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        
<div class="users form large-4 medium-7 container  content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><h2><?= __('Cadastrar') ?></h2></legend>
        <h5>
        <?php
            echo $this->Form->control('name', ['label'=>'Nome:']).'<br>';      
            echo $this->Form->control('username', ['label'=>'Usuario:']).'<br>'; 
            echo $this->Form->control('password',['label'=>'Senha:']).'<br>';
            echo $this->Form->control('email:');           
            // echo $this->Form->control('health_units._ids', ['options' => $healthUnits]);
        ?>
        </h5>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
</center>