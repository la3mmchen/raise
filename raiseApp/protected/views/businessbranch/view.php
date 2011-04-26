<?php
$this->breadcrumbs=array(
	'Businessbranches'=>array('index'),
	$model->businessbranch_id,
);

$this->menu=array(
	array('label'=>'List Businessbranch', 'url'=>array('index')),
	array('label'=>'Create Businessbranch', 'url'=>array('create')),
	array('label'=>'Update Businessbranch', 'url'=>array('update', 'id'=>$model->businessbranch_id)),
	array('label'=>'Delete Businessbranch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->businessbranch_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Businessbranch', 'url'=>array('admin')),
);
?>

<h1>View Businessbranch <ins><?php echo $model->businessbranch_name; ?></ins></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'businessbranch_id',
		'businessbranch_name',
		'businessbranch_description',
	),
)); ?>

<br/><hr/>
<h3>is assigned to:</h3>
<?php 
	$companys = $model->tblCompanys;
	foreach ($companys as $item) {
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$item,
		'attributes'=>array(
		'company_id',
		'company_name',
		'company_contact',
		'company_locationCount',
		'company_description',
	),)); 
	echo "<br/>";
	}
?>
