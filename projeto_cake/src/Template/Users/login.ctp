
<div class="users view form large-4 medium-8 container content	">
<?= $this->Flash->render('Auth') ?>
<?= $this->Form->create() ?>
	<center>
			<fieldset>
				<legend><?= __('Por favor, entre com seu usuario e senha:') ?><legend>
				<?= $this->Form->control('username', ['label'=>'Usuário'])?>
				<?= $this->Form->control('password', ['label'=>'Senha'])?>
			</fieldset>
		<?= $this->Form->button(__('Login')); ?>
		 	<td class="action">
		        <a href="add" > Ou Cadastre-se</a>
		    </td>
	</center>
<?= $this->Form->end() ?>
</div>