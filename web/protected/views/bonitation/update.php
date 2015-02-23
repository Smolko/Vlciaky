<?php
/* @var $this BonitationController */
/* @var $model Bonitation */

$this->breadcrumbs=array(
	'Bonitations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bonitation', 'url'=>array('index')),
	array('label'=>'Create Bonitation', 'url'=>array('create')),
	array('label'=>'View Bonitation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bonitation', 'url'=>array('admin')),
);
?>

<h1>Update Bonitation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>