<?php
/* @var $this ExhibitionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Exhibitions',
);

$this->menu=array(
	array('label'=>'Create Exhibition', 'url'=>array('create')),
	array('label'=>'Manage Exhibition', 'url'=>array('admin')),
);
?>

<h1>Exhibitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
