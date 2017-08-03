<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div id="success" class="alert alert-success fade in" onclick="this.classList.add('hidden')"><?= $message ?>
	<a href="#" onclick="getElementById('success').style.display='none'" class="close">&times;</a>
</div>
