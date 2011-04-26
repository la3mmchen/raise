<?php foreach($locations as $location): ?>
<div class="location">
      <div class="author">
		<?php echo CHtml::link($location->location_name, array('location/view/', 'id'=>$location->location_id)); ?>:
		<?php echo $location->location_geo; ?>
	</div>


     <hr>
</div>
<?php endforeach; ?>
