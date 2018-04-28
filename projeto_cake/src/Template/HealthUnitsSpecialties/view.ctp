<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnitsSpecialty $healthUnitsSpecialty
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Health Units Specialty'), ['action' => 'edit', $healthUnitsSpecialty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Health Units Specialty'), ['action' => 'delete', $healthUnitsSpecialty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnitsSpecialty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Health Units Specialties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Units Specialty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="healthUnitsSpecialties view large-9 medium-8 columns content">
    <h3><?= h($healthUnitsSpecialty->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Health Unit') ?></th>
            <td><?= $healthUnitsSpecialty->has('health_unit') ? $this->Html->link($healthUnitsSpecialty->health_unit->name, ['controller' => 'HealthUnits', 'action' => 'view', $healthUnitsSpecialty->health_unit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialty') ?></th>
            <td><?= $healthUnitsSpecialty->has('specialty') ? $this->Html->link($healthUnitsSpecialty->specialty->name, ['controller' => 'Specialties', 'action' => 'view', $healthUnitsSpecialty->specialty->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($healthUnitsSpecialty->id) ?></td>
        </tr>
    </table>
</div>
