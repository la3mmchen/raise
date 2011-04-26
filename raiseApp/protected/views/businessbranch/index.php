<?php
$this->breadcrumbs=array(
	'Businessbranches',
);

$this->menu=array(
	array('label'=>'Create Businessbranch', 'url'=>array('create')),
	array('label'=>'Manage Businessbranch', 'url'=>array('admin')),
);
?>

<h1>Businessbranches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
