<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'businessbranch-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'businessbranch_name'); ?>
		<?php echo $form->textField($model,'businessbranch_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'businessbranch_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'businessbranch_description'); ?>
		<?php echo $form->textArea($model,'businessbranch_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'businessbranch_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->