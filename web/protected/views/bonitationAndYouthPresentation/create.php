<?php
/* @var $this BonitationAndYouthPresentationController */
/* @var $model BonitationAndYouthPresentation */

$this->breadcrumbs=array(
	'Bonitation And Youth Presentations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BonitationAndYouthPresentation', 'url'=>array('index')),
	array('label'=>'Manage BonitationAndYouthPresentation', 'url'=>array('admin')),
);
?>

<h1>Create BonitationAndYouthPresentation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>