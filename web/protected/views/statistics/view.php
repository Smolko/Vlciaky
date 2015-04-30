<?php
/* @var $this StatisticsController */
/* @var $model Statistics */

$this->breadcrumbs=array(
	'Statistics'=>array('index'),
	$model->name,
);

$this->menu=array(
);
?>

<h1>View Statistics #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'reg_number',
		'registered_at',
		'id_user',
		'created_at',
		'updated_at',
		'state',
	),
)); ?>