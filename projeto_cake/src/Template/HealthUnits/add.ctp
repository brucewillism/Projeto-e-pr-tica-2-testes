<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>
<?= $this->Html->script("cadastro.js") ?>
<?= $this->Html->script("cadastro-lat-lng.js") ?>
<?= $this->fetch("script")?>
<br><br><br><br><br>
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
        <legend><?= __('Cadastrar Nova Unidade de Sáude') ?></legend>
            <?= $this->Form->control('name', ['label'=>'Nome',"class"=>"form-control","placeholder"=>"Digite o nome da unidade que deseja cadastrar"]); ?>
            
            <?= $this->Form->control('telephone', ['label'=>'Telefone',"class"=>"form-control","placeholder"=>"Digite o numero do telefone"]); ?>
            
            <?= $this->Form->control('business_hours', ['label'=>'Horario de atendimento', "class"=>"form-control","placeholder"=>"Digite o nome da unidade que deseja cadastrar"]); ?>  
            
            <?= $this->Form->control('CEP',['label'=>'CEP',"class"=>"form-control","placeholder"=>"Digite o cep da unidade e pesquisaremos automaticamente as outras informações"]); ?>
            
            <?= $this->Form->control('rua', ['label'=>'Endereço', "id"=>"rua", "disabled"=>"true","class"=>"form-control","placeholder"=>"Digite o nome da unidade que deseja cadastrar"]); ?>            
            
            <?= $this->Form->control('cidade', ['label'=>'Cidade', "id"=>"cidade", "disabled"=>"true","class"=>"form-control","placeholder"=>"Digite o nome da unidade que deseja cadastrar"]); ?> 
            
            <?= $this->Form->control('uf', ['label'=>'Estado', "id"=>"uf", "disabled"=>"true","class"=>"form-control","placeholder"=>"Digite o nome da unidade que deseja cadastrar"]); ?>
            
            <?= $this->Form->control('numero', ['label'=>'Número', "id"=>"numero", "disabled"=>"true","class"=>"form-control","placeholder"=>"Digite o nome da unidade que deseja cadastrar"]); ?>                
            
            <?= $this->Form->control('complete_address',['label'=>"Endereço completo","id"=>"complet","readonly"=>"readonly","class"=>"form-control" ]) ?>
            
            <?= $this->Form->control('latitude',["readonly"=>"readonly","class"=>"esconder","id"=>"latitude"]) ?>
            
            <?= $this->Form->control('longitude',["readonly"=>"readonly","class"=>"esconder","id"=>"longitude"]) ?>

    </fieldset>
    <?= $this->Form->button(__('Salvar'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
