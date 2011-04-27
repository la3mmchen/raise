<?php
$this->breadcrumbs=array(
	'Businessbranches'=>array('index'),
	$model->businessbranch_id=>array('view','id'=>$model->businessbranch_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Businessbranch', 'url'=>array('index')),
	array('label'=>'Create Businessbranch', 'url'=>array('create')),
	array('label'=>'View Businessbranch', 'url'=>array('view', 'id'=>$model->businessbranch_id)),
	array('label'=>'Manage Businessbranch', 'url'=>array('admin')),
);
?>

<h1>Update Businessbranch <?php echo $model->businessbranch_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>