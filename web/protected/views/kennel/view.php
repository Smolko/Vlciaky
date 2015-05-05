<?php
/* @var $this KennelController */
/* @var $model Kennel */

$this->breadcrumbs=array(
	'Kennels'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Kennel', 'url'=>array('index'),'visible'=>RightsHelper::can("Kennel.index")),
	array('label'=>'Create Kennel', 'url'=>array('create'),'visible'=>RightsHelper::can("Kennel.create")),
	array('label'=>'Update Kennel', 'url'=>array('update', 'id'=>$model->id),'visible'=>RightsHelper::can("Kennel.update")&&$model->canUpdate()),
	array('label'=>'Delete Kennel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>RightsHelper::can("Kennel.delete")),
	array('label'=>'Manage Kennel', 'url'=>array('admin'),'visible'=>RightsHelper::can("Kennel.admin")),
);
?>

<h1>View Kennel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'reg_number',
		'registered_at',
		'id_user',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
