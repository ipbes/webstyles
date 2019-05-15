
<div class="event-box">
<?php
//dpm($fields['picture']);
?>
<ul>
	<li class="date-title"><?php echo $fields['field_date']->content; ?></li>
<li class="date-title group"><?php echo $fields['field_event_type_groups']->content; ?></li>
</ul>
<p class="title"><?php echo $fields['title']->content; ?></p>
<ul class="location">
	<li class=" city"><?php echo $fields['field_city']->content; ?>
	</li>
	<li class="country"><?php echo $fields['field_address_country']->content; ?>
	</li>
</ul>
</div>
