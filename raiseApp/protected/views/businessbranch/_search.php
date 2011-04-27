<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'businessbranch_id'); ?>
		<?php echo $form->textField($model,'businessbranch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'businessbranch_name'); ?>
		<?php echo $form->textField($model,'businessbranch_name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'businessbranch_description'); ?>
		<?php echo $form->textArea($model,'businessbranch_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->