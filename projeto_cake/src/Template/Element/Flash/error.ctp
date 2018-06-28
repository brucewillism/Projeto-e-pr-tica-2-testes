<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-warning text-center" onclick="this.classList.add('hidden');">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;
	</a>
	<strong>Aviso!</strong> <?= $message ?>
</div>
