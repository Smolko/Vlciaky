<?php
/* @var $this YouthPresentationDogController */
/* @var $model YouthPresentationDog */

$this->breadcrumbs=array(
	'Youth Presentation Dogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List YouthPresentationDog', 'url'=>array('index')),
	array('label'=>'Create YouthPresentationDog', 'url'=>array('create')),
	array('label'=>'View YouthPresentationDog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage YouthPresentationDog', 'url'=>array('admin')),
);
?>

<h1>Update YouthPresentationDog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>