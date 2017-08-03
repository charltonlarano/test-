<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div style="" id="error" class="alert alert-danger fade in" onclick="this.classList.add('hidden');"><?= $message ?>
	
	<a href="#" onclick="getElementById('error').style.display='none'" class="close">&times;</a>
</div>
