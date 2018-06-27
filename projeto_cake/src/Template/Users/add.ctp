<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="form-group ">
    <?= $this->Form->create($user) ?>
    <fieldset>
            <h3 id="contato" class="text-center">Cadastrar </h3>
        <?php
            echo $this->Form->control('name', ['label'=>'Nome',"class"=>"form-control","placeholder"=>"Digite seu nome"]);
            echo $this->Form->control('username', ['label'=>'Usuario',"class"=>"form-control","placeholder"=>"Digite seu nome de usuario"]);
            echo $this->Form->control('email',['label'=>'Email',"class"=>"form-control","placeholder"=>"Digite seu email"]);           

            echo $this->Form->control('password',['label'=>'Senha',"class"=>"form-control","placeholder"=>"Digite sua senha"]);
            // echo $this->Form->control('health_units._ids', ['options' => $healthUnits]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Cadastrar'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
</center>

