<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_contact')); ?>:</b>
	<?php echo CHtml::encode($data->user_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pwd')); ?>:</b>
	<?php echo CHtml::encode($data->user_pwd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_information')); ?>:</b>
	<?php echo CHtml::encode($data->user_information); ?>
	<br />


</div>