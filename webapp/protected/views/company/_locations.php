<?php foreach($locations as $location): ?>
<div class="location">
      <div class="author">
		<?php echo $location->location_name; ?>:
		<?php echo $location->location_geo; ?>
	</div>


     <hr>
</div>
<?php endforeach; ?>
