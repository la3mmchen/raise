<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_contact'); ?>
		<?php echo $form->textField($model,'user_contact',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'user_contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_pwd'); ?>
		<?php echo $form->textField($model,'user_pwd',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'user_pwd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->