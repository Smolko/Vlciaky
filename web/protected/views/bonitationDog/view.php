<?php
/* @var $this BonitationDogController */
/* @var $model BonitationDog */

$this->breadcrumbs=array(
	'Bonitation Dogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BonitationDog', 'url'=>array('index')),
	array('label'=>'Create BonitationDog', 'url'=>array('create')),
	array('label'=>'Update BonitationDog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BonitationDog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BonitationDog', 'url'=>array('admin')),
);
?>

<h1>View BonitationDog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_bonitation_and_youth_presentation',
		'id_dog',
		'evaluation',
		'bonitation_code',
		'temperament',
		'type',
		'harmony',
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
		'comment',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
