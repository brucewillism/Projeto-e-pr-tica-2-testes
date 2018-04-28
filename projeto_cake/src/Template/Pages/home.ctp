
<div class="container-fluid">
	<form class="form-inline" action="#" method="GET">
    	 <input class="form-control rounded" name="search" type="text" placeholder="Unidade de saude">
    	<button class="rounded" type="submit"><i class="fas fa-search"></i></button>
  	</form>
</div>
<div class="jumbotron">

	<?php foreach ($unidades as $unidade): ?>
		<li id="list">
			<?= $this->Html->link($unidade['name'],
			["controller"=>"HealthUnits","action"=>"view",$unidade->id]) ?>
				
			</li>
	<?php endforeach ?>
	
	
</div>
