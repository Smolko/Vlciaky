<?php
/* @var $this YouthPresentationDogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Youth Presentation Dogs',
);

$this->menu=array(
	array('label'=>'Create YouthPresentationDog', 'url'=>array('create')),
	array('label'=>'Manage YouthPresentationDog', 'url'=>array('admin')),
);
?>

<h1>Youth Presentation Dogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
