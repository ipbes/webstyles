
<div class="row post-box-page">
<?php
//dpm($fields['picture']);
?>
<div class="col-sm-12 post-box-page-img"><?php echo $fields['field_image']->content; ?></div>
<div class="col-sm-12 post-title"><?php echo $fields['title']->content; ?></div>
<div class="col-sm-12 user"> Posted On <?php echo $fields['created']->content; ?> by <?php echo $fields['name']->content; ?></div>
</div>
