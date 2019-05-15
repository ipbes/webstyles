<?php
$data = node_load("12025");
$file = file_load($data->field_image['und']['0']['fid']);
$uri = $file->uri;
$url = file_create_url($uri);
?>
<div class="row">
  <p><?= $data->field_workspace['und']['0']['value']; ?></p>
</div>