<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('businessbranch_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->businessbranch_id), array('view', 'id'=>$data->businessbranch_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('businessbranch_name')); ?>:</b>
	<?php echo CHtml::encode($data->businessbranch_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('businessbranch_description')); ?>:</b>
	<?php echo CHtml::encode($data->businessbranch_description); ?>
	<br />


</div>
