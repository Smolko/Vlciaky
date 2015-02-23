<?php
/* @var $this YouthPresentationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Youth Presentations',
);

$this->menu=array(
	array('label'=>'Create YouthPresentation', 'url'=>array('create')),
	array('label'=>'Manage YouthPresentation', 'url'=>array('admin')),
);
?>

<h1>Youth Presentations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
