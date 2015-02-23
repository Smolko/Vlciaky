<?php
/* @var $this HealthController */
/* @var $model Health */

$this->breadcrumbs=array(
	'Healths'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Health', 'url'=>array('index')),
	array('label'=>'Manage Health', 'url'=>array('admin')),
);
?>

<h1>Create Health</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>