<?php
/* @var $this YouthPresentationController */
/* @var $model YouthPresentation */

$this->breadcrumbs=array(
	'Youth Presentations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List YouthPresentation', 'url'=>array('index')),
	array('label'=>'Create YouthPresentation', 'url'=>array('create')),
	array('label'=>'View YouthPresentation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage YouthPresentation', 'url'=>array('admin')),
);
?>

<h1>Update YouthPresentation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>