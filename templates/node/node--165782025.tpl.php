<?php
$data = node_load("12025");
$file = file_load($data->field_image['und']['0']['fid']);
$uri = $file->uri;
$url = file_create_url($uri);
?>
<!-- <div class="row onet-group-home"> -->
<!--   <div class="col-lg-6 col-md-12 col-sm-12 left">
    <h1><?= $data->title; ?></h1>
    <p><?= $data->body['und']['0']['value']; ?> </p>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 right"><img src="<?= $url; ?>"></div>
</div>
<div class="row workspace-row">
  <div class="col-lg-8 col-md-10 col-sm-12 workspace-col">
    <h1>Workspace</h1>
    <p><?= $data->field_workspace['und']['0']['value']; ?></p>
    <!-- <a class="btn more-btn" href="#">Know More</a> -->
  </div>
</div> -->