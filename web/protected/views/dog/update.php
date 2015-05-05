<?php
$this->breadcrumbs=array(
	'Dogs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Dog','url'=>array('index')),
	array('label'=>'Create Dog','url'=>array('create')),
	array('label'=>'View Dog','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Dog','url'=>array('admin')),
	);
	?>

	<h1>Update Dog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>