<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success text-center" onclick="this.classList.add('hidden')">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;
	</a>
<strong>Sucesso!</strong>

<?= $message ?></div>
