<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->company_id), array('view', 'id'=>$data->company_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::encode($data->company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_contact')); ?>:</b>
	<?php echo CHtml::encode($data->company_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_location')); ?>:</b>
	<?php echo CHtml::encode($data->company_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_description')); ?>:</b>
	<?php echo CHtml::encode($data->company_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_branch')); ?>:</b>
	<?php echo CHtml::encode($data->company_branch); ?>
	<br />


</div>
