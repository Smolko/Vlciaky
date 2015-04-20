<?php
/* @var $this BonitationDogController */
/* @var $model BonitationDog */

$this->breadcrumbs=array(
	'Bonitation Dogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BonitationDog', 'url'=>array('index')),
	array('label'=>'Manage BonitationDog', 'url'=>array('admin')),
);
?>

<h1>Create BonitationDog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>