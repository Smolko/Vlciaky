<?php
/* @var $this HealthController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Healths',
);

$this->menu=array(
	array('label'=>'Create Health', 'url'=>array('create')),
	array('label'=>'Manage Health', 'url'=>array('admin')),
);
?>

<h1>Healths</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
