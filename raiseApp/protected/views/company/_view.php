<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->company_name), array('view', 'id'=>$data->company_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_contact')); ?>:</b>
	<?php echo CHtml::encode($data->company_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_locationCount')); ?>:</b>
	<?php echo CHtml::encode($data->company_locationCount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_description')); ?>:</b>
	<?php echo CHtml::encode($data->company_description); ?>
	<br />


</div>
