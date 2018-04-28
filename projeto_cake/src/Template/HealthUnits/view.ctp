<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>

<div class="healthUnits view large-12 medium-8 columns content">
    <h3><?= h($healthUnit->name) ?></h3>
    <table>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <th scope="row"><?= __('CEP') ?></th>
            <th scope="row"><?= __('Endereço Completo') ?></th>
        </tr>
        <tr>
            <td><?= h($healthUnit->telephone) ?></td>
            <td><?= h($healthUnit->CEP) ?></td>
            <td><?= h($healthUnit->complete_address) ?></td>
        </tr>
    </table>
    <br>
    <div class="related">
        <?php if (!empty($healthUnit->specialties)): ?>
        <h4><?= __('Especialidades') ?></h4>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nome') ?></th>
            </tr>
            <?php foreach ($healthUnit->specialties as $specialties): ?>
            <tr>
                <td><?= h($specialties->name) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
