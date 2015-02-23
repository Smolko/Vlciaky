<?php
/* @var $this BonitationController */
/* @var $model Bonitation */

$this->breadcrumbs=array(
	'Bonitations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bonitation', 'url'=>array('index')),
	array('label'=>'Manage Bonitation', 'url'=>array('admin')),
);
?>

<h1>Create Bonitation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>