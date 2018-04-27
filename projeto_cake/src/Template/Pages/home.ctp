
<div class="container-fluid">
	<form class="form-inline" action="#" method="GET">
    	 <input class="form-control rounded" name="palavra" type="text" placeholder="Unidade de saude">
    	<button class="rounded" type="submit"><i class="fas fa-search"></i></button>
  	</form>
</div>
<div class="jumbotron">

	<?php foreach ($unidades as $unidade): ?>
		<li id="list"><?= $unidade['name'] ?></li>
	<?php endforeach ?>
	
	
</div>
