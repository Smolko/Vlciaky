<?php
/* @var $this ExhibitionChildDogController */
/* @var $model ExhibitionChildDog */

$this->breadcrumbs=array(
	'Exhibition Child Dogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExhibitionChildDog', 'url'=>array('index')),
	array('label'=>'Create ExhibitionChildDog', 'url'=>array('create')),
	array('label'=>'View ExhibitionChildDog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExhibitionChildDog', 'url'=>array('admin')),
);
?>

<h1>Update ExhibitionChildDog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>