<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>
<center>
<br><br><br><br>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $healthUnit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul> -->
</nav>
<div class="healthUnits form large-9 medium-8 columns content">
    <?= $this->Form->create($healthUnit) ?>
    <fieldset>
        <legend><?= __('Edit Health Unit') ?></legend>
        <?php
            echo $this->Form->control('name', ["label"=>"Nome da unidade","class"=>"form-control"]);
            echo $this->Form->control('telephone',["label"=>"Telefone","class"=>"form-control"]);
            echo $this->Form->control('business_hours',["label"=>"Horario de atendimento","class"=>"form-control"]);
            echo $this->Form->control('CEP',["label"=>"Cep","class"=>"form-control"]);
            echo $this->Form->control('complete_address',["label"=>"Endereço completo","class"=>"form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar Alterações'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
</center>
