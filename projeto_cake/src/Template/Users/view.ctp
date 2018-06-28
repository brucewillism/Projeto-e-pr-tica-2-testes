<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
    <h3><?= h($user->name) ?></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= __('Nome do usuario') ?></th>
                <th scope="col"><?= __('Nome de login') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
        </tbody>
    </table>


    <div class="related">
         <?php if (!empty($user->health_units)): ?>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Telephone') ?></th>
                <th scope="col"><?= __('CEP') ?></th>
                <th scope="col"><?= __('Complete Address') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->health_units as $healthUnits): ?>
            <tr>
                <td><?= h($healthUnits->id) ?></td>
                <td><?= h($healthUnits->name) ?></td>
                <td><?= h($healthUnits->telephone) ?></td>
                <td><?= h($healthUnits->CEP) ?></td>
                <td><?= h($healthUnits->complete_address) ?></td>
                <td><?= h($healthUnits->latitude) ?></td>
                <td><?= h($healthUnits->longitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HealthUnits', 'action' => 'view', $healthUnits->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HealthUnits', 'action' => 'edit', $healthUnits->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HealthUnits', 'action' => 'delete', $healthUnits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnits->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
