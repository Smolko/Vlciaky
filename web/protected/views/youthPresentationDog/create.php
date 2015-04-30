<?php
/* @var $this YouthPresentationDogController */
/* @var $model YouthPresentationDog */

$this->breadcrumbs=array(
	'Youth Presentation Dogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List YouthPresentationDog', 'url'=>array('index')),
	array('label'=>'Manage YouthPresentationDog', 'url'=>array('admin')),
);
?>

<h1>Create YouthPresentationDog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>