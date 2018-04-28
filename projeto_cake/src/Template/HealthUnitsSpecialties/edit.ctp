<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnitsSpecialty $healthUnitsSpecialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $healthUnitsSpecialty->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnitsSpecialty->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Health Units Specialties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="healthUnitsSpecialties form large-9 medium-8 columns content">
    <?= $this->Form->create($healthUnitsSpecialty) ?>
    <fieldset>
        <legend><?= __('Edit Health Units Specialty') ?></legend>
        <?php
            echo $this->Form->control('health_unit_id', ['options' => $healthUnits]);
            echo $this->Form->control('specialtie_id', ['options' => $specialties]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
