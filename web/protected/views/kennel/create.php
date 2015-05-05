<?php
/* @var $this KennelController */
/* @var $model Kennel */

$this->breadcrumbs=array(
	'Kennels'=>array('index'),
	'Create',
);

$this->menu=array(
	
        array('label'=>'List Kennel', 'url'=>array('index'),'visible'=>RightsHelper::can("Kennel.index")),
	array('label'=>'Manage Kennel', 'url'=>array('admin'),'visible'=>RightsHelper::can("Kennel.admin")),
);
?>

<h1>Create Kennel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>