<?php
$this->breadcrumbs=array(
	'Companys'=>array('index'),
	$model->company_name,
);

$this->menu=array(
	array('label'=>'List Company', 'url'=>array('index')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'Update Company', 'url'=>array('update', 'id'=>$model->company_id)),
	array('label'=>'Delete Company', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->company_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Company', 'url'=>array('admin')),
	array('label'=>'Add to Businessbranch', 'url'=>array('assign', 'cid'=>$model->company_id)),
	array('label'=>'Create Location', 'url'=>array('location/create', 'cid'=>$model->company_id, 'cname'=>$model->company_name)),
);
?>

<h1>View Company <ins><?php echo $model->company_name; ?></ins></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'company_id',
		'company_name',
		'company_contact',
		'company_locationCount',
		'company_description',
	),
)); ?>

<br/><hr/>
<h3>belongs to:</h3>
<?php 
	$businessbranch = $model->tblBusinessbranches;
	foreach ($businessbranch as $item) {
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$item,
		'attributes'=>array(
		'businessbranch_id',
		'businessbranch_name',
		'businessbranch_description',
	),)); 
	}
	
?>

