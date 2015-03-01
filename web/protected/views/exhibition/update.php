<?php
/* @var $this ExhibitionController */
/* @var $model Exhibition */

$this->breadcrumbs=array(
	'Exhibitions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Exhibition', 'url'=>array('index')),
	array('label'=>'Create Exhibition', 'url'=>array('create')),
	array('label'=>'View Exhibition', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Exhibition', 'url'=>array('admin')),
);
?>

<h1>Update Exhibition <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>