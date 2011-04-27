<?php
$this->breadcrumbs=array(
	'Businessbranches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Businessbranch', 'url'=>array('index')),
	array('label'=>'Manage Businessbranch', 'url'=>array('admin')),
);
?>

<h1>Create Businessbranch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>