
<div class="form-group ">
<?= $this->Flash->render('Auth') ?>
<?= $this->Form->create() ?>
			<fieldset>
      		<h3 id="contato" class="text-center">Conectar </h3>
				<?= $this->Form->control('username',["label"=>"Usuário","class"=>"form-control","placeholder"=>"Entre com seu nome de usuário"]); ?>
				<?= $this->Form->control('password',['label'=>'Senha',"class"=>"form-control","placeholder"=>"Digite sua senha"]); ?> 
			</fieldset>
			<br>
		<?= $this->Form->button(__('Login'),["class"=>"btn btn-primary"]) ?>

	    <a class="btn btn-primary" href="add" > Ou Cadastre-se</a>

<?= $this->Form->end() ?>
</div>


