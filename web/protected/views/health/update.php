<?php
/* @var $this HealthController */
/* @var $model Health */

$this->breadcrumbs=array(
	'Healths'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Health', 'url'=>array('index')),
	array('label'=>'Create Health', 'url'=>array('create')),
	array('label'=>'View Health', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Health', 'url'=>array('admin')),
);
?>

<h1>Update Health <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>