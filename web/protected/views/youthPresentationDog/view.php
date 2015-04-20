<?php
/* @var $this YouthPresentationDogController */
/* @var $model YouthPresentationDog */

$this->breadcrumbs=array(
	'Youth Presentation Dogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List YouthPresentationDog', 'url'=>array('index')),
	array('label'=>'Create YouthPresentationDog', 'url'=>array('create')),
	array('label'=>'Update YouthPresentationDog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete YouthPresentationDog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage YouthPresentationDog', 'url'=>array('admin')),
);
?>

<h1>View YouthPresentationDog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_bonitation_and_youth_presentation',
		'id_dog',
		'assessment',
		'evaluation',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
