<?php
/* @var $this EnduranceRunController */
/* @var $model EnduranceRun */

$this->breadcrumbs=array(
	'Endurance Runs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EnduranceRun', 'url'=>array('index')),
	array('label'=>'Create EnduranceRun', 'url'=>array('create')),
	array('label'=>'Update EnduranceRun', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EnduranceRun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EnduranceRun', 'url'=>array('admin')),
);
?>

<h1>View EnduranceRun #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'place',
		'order',
		'handler',
		'type',
		'evaluation',
		'andurance_run_place',
		'date',
		'referee',
		'id_dog',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
