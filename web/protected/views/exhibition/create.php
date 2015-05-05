<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'Exhibitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Exhibition', 'url'=>array('index'),'visible'=>RightsHelper::can("Exhibition.index")),
	array('label'=>'Manage Exhibition', 'url'=>array('admin'),'visible'=>RightsHelper::can("Exhibition.admin")),
);
?>

<h1>Create Exhibition</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>