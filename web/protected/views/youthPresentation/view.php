<?php
/* @var $this YouthPresentationController */
/* @var $model YouthPresentation */

$this->breadcrumbs=array(
	'Youth Presentations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List YouthPresentation', 'url'=>array('index')),
	array('label'=>'Create YouthPresentation', 'url'=>array('create')),
	array('label'=>'Update YouthPresentation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete YouthPresentation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage YouthPresentation', 'url'=>array('admin')),
);
?>

<h1>View YouthPresentation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'assessment',
		'evaluation',
		'youth_presentation_date',
		'youth_presentation_place',
		'referee',
		'id_dog',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>
