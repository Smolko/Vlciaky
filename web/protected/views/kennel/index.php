<?php
/* @var $this KennelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kennels',
);

$this->menu=array(
	array('label'=>'Create Kennel', 'url'=>array('create')),
	array('label'=>'Manage Kennel', 'url'=>array('admin')),
);
?>

<h1>Kennels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
