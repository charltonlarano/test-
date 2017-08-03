<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>


<div class="container">
<div class="alert alert-success alert-dismissable fade in" onclick="this.classList.add('hidden')"><?= $message ?>
    <a href="#" class="close" onclick="getElementById('success').style.display='none'" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> 

</div>
