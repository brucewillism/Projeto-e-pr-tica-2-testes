<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialty $specialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Specialties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="specialties form large-9 medium-8 columns content">
    <?= $this->Form->create($specialty) ?>
    <fieldset>
        <legend><?= __('Add Specialty') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('health_units._ids', ['options' => $healthUnits]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
