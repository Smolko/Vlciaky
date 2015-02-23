<?php
/* @var $this YouthPresentationController */
/* @var $model YouthPresentation */

$this->breadcrumbs=array(
	'Youth Presentations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List YouthPresentation', 'url'=>array('index')),
	array('label'=>'Manage YouthPresentation', 'url'=>array('admin')),
);
?>

<h1>Create YouthPresentation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>