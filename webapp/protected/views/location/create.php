<?php
$this->breadcrumbs=array(
	'Locations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Location', 'url'=>array('index')),
	array('label'=>'Manage Location', 'url'=>array('admin')),
);
?>

<h1>Create Location for company <ins><?php echo $_GET['cname']?></ins></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
