<?php
/* @var $this BonitationController */
/* @var $model Bonitation */

$this->breadcrumbs=array(
	'Bonitations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bonitation', 'url'=>array('index')),
	array('label'=>'Create Bonitation', 'url'=>array('create')),
	array('label'=>'Update Bonitation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bonitation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bonitation', 'url'=>array('admin')),
);
?>

<h1>View Bonitation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_dog',
		'bonitation_code',
		'temperament',
		'comment',
		'head_length',
		'head_width',
		'snout_length',
		'ear_length',
		'oblique_length',
		'chest_depth',
		'chest_circle',
		'front_leg_length',
		'thigh_length',
		'pastern_length',
		'pastern_circle',
		'tarsus_length',
		'tibia_length',
		'harmony',
		'type',
		'bonitation_place',
		'referee',
		'state',
		'date',
		'created_at',
		'updated_at',
	),
)); ?>
