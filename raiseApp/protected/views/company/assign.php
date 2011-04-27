<?php
$this->breadcrumbs=array(
	'Companys'=>array('index'),
	$model->company_name,
);

$this->menu=array(
	array('label'=>'Back', 'url'=>array('view', 'id'=>$model->company_id)),
);
?>

<h1>Assign Company <ins><?php echo $model->company_name; ?></ins></h1>

<?php 
	// get all available businessbranch names
	$array = array();
	$availableBranches = Businessbranch::model()->findAll();
	foreach($availableBranches as $item) {
		$array[$item->businessbranch_name] = $item->businessbranch_name;
	}	
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'company-assign',
		'enableAjaxValidation'=>false,
	));
	echo $form->dropDownList(Businessbranch::model(), 'businessbranch_name', $array);
	
	echo "<br/>";
	
	echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');
	$this->endWidget();
 ?>

<br/><hr/>
<h3>Company <ins><?php echo $model->company_name; ?></ins> is already assigned to:</h3>
<?php 
	$businessbranch = $model->tblBusinessbranches;
	foreach ($businessbranch as $item) {
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$item,
		'attributes'=>array(
		'businessbranch_name',
	),)); 
	}
	
?>

