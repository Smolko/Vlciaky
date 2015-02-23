<?php
/* @var $this FertilisationController */
/* @var $model Fertilisation */

$this->breadcrumbs=array(
	'Fertilisations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fertilisation', 'url'=>array('index')),
	array('label'=>'Create Fertilisation', 'url'=>array('create')),
	array('label'=>'View Fertilisation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Fertilisation', 'url'=>array('admin')),
);
?>

<h1>Update Fertilisation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>