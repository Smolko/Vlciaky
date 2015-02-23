<?php
/* @var $this FertilisationController */
/* @var $model Fertilisation */

$this->breadcrumbs=array(
	'Fertilisations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fertilisation', 'url'=>array('index')),
	array('label'=>'Manage Fertilisation', 'url'=>array('admin')),
);
?>

<h1>Create Fertilisation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>