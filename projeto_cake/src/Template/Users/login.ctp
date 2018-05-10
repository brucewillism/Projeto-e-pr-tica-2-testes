
<div class="users form large-4 medium-8 container content	">
<?= $this->Flash->render('Auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
		<legend><?= __('Por favor, entre com seu usuario e senha:') ?><legend>
		<?= $this->Form->control('username', ['label'=>'Usuário'])?>
		<?= $this->Form->control('password', ['label'=>'Senha'])?>
	</fieldset>
<?= $this->Form->button(__('Login')); ?>
 	<td class="action">
        <a href="add" >Cadastrar</a>
    </td>
<?= $this->Form->end() ?>
</div>