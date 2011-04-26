<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php // initialize locationCount with zero
		echo $form->hiddenField($model, 'company_locationCount', array(0));
	?>

	<div class="row">
		<?php echo $form->labelEx($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'company_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_contact'); ?>
		<?php echo $form->textField($model,'company_contact',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'company_contact'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'company_description'); ?>
		<?php echo $form->textArea($model,'company_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'company_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

