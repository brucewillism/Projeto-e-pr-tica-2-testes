<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnitsSpecialty[]|\Cake\Collection\CollectionInterface $healthUnitsSpecialties
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Health Units Specialty'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="healthUnitsSpecialties index large-9 medium-8 columns content">
    <h3><?= __('Health Units Specialties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('health_unit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('specialtie_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($healthUnitsSpecialties as $healthUnitsSpecialty): ?>
            <tr>
                <td><?= $this->Number->format($healthUnitsSpecialty->id) ?></td>
                <td><?= $healthUnitsSpecialty->has('health_unit') ? $this->Html->link($healthUnitsSpecialty->health_unit->name, ['controller' => 'HealthUnits', 'action' => 'view', $healthUnitsSpecialty->health_unit->id]) : '' ?></td>
                <td><?= $healthUnitsSpecialty->has('specialty') ? $this->Html->link($healthUnitsSpecialty->specialty->name, ['controller' => 'Specialties', 'action' => 'view', $healthUnitsSpecialty->specialty->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $healthUnitsSpecialty->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $healthUnitsSpecialty->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $healthUnitsSpecialty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnitsSpecialty->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
