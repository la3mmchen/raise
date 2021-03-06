<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'company_location'); ?>
		<?php echo $form->textField($model,'company_location'); ?>
		<?php echo $form->error($model,'company_location'); ?>
		</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_locationCount'); ?>
		<?php echo $form->textField($model,'company_locationCount'); ?>
		<?php echo $form->error($model,'company_locationCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_description'); ?>
		<?php echo $form->textArea($model,'company_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'company_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_branch'); ?>
		<?php echo $form->dropDownList($model,'company_branch',$model->getTypeOptions()); ?>
		<?php echo $form->error($model,'company_branch'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
