<?php
/* @var $this KennelController */
/* @var $model Kennel */

$this->breadcrumbs=array(
	'Kennels'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kennel', 'url'=>array('index')),
	array('label'=>'Create Kennel', 'url'=>array('create')),
	array('label'=>'View Kennel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kennel', 'url'=>array('admin')),
);
?>

<h1>Update Kennel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>