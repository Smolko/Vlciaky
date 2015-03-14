<?php
/* @var $this ExhibitionChildDogController */
/* @var $model ExhibitionChildDog */

$this->breadcrumbs=array(
	'Exhibition Child Dogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExhibitionChildDog', 'url'=>array('index')),
	array('label'=>'Manage ExhibitionChildDog', 'url'=>array('admin')),
);
?>

<h1>Create ExhibitionChildDog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>