<?php
/* @var $this BonitationDogController */
/* @var $model BonitationDog */

$this->breadcrumbs=array(
	'Bonitation Dogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BonitationDog', 'url'=>array('index')),
	array('label'=>'Create BonitationDog', 'url'=>array('create')),
	array('label'=>'View BonitationDog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BonitationDog', 'url'=>array('admin')),
);
?>

<h1>Update BonitationDog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>