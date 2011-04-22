<?php
$this->breadcrumbs=array(
	'Companys'=>array('index'),
	$model->company_id,
);

$this->menu=array(
	array('label'=>'List Company', 'url'=>array('index')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'Update Company', 'url'=>array('update', 'id'=>$model->company_id)),
	array('label'=>'Delete Company', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->company_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Company', 'url'=>array('admin')),
	array('label'=>'Create Location', 'url'=>array('location/create', 'cid'=>$model->company_id)),
);
?>

<h1>View Company #<?php echo $model->company_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'company_id',
		'company_name',
		'company_contact',
		'company_location',
		'company_locationCount',
		'company_description',
		'company_branch',
	),
)); ?>

<div id="locations">
	<?php if($model->company_locationCount >= 1) : ?>
		<h3>
			<?php echo $model->company_locationCount ? $model->company_locationCount . ' Locations' : 'One Location'?>
		</h3>
		<?php $this->renderPartial('_locations', array('locations'=>$model->locations,));?>
		<?php endif; ?>
</div>
